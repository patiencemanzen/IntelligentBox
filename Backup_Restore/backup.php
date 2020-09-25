<?php

    // INITILAZE DATABASE CONNECTION
    // =================================================================================================================
    require_once ("../../Scyllar.php");

    // INITIALIZE CLASS DATA BACKUP
    // =================================================================================================================
    class Data_backup extends Scyllar {
             
        public function backup_data(){

            $select_unwanted_user = "SELECT * FROM intelligent_users WHERE Verified='notYet'";
            $execute_unwanted = mysqli_query($this->Frequency(), $select_unwanted_user);
            while($fetch_unwanted = mysqli_fetch_assoc($execute_unwanted)){
                $getEmail = $fetch_unwanted['email'];

                $delete_way_email = "DELETE FROM user_auto_detection WHERE email='$getEmail'";
                $execute_way_email = mysqli_query($this->Frequency(), $delete_way_email);

                $user_profile_image = "DELETE FROM user_profile_image WHERE usr_email='$getEmail'";
                $execute_profile_image = mysqli_query($this->Frequency(), $user_profile_image);
            }
            
            $clean_up = "DELETE FROM intelligent_users WHERE Verified='notYet'";
            $execute_clear = mysqli_query($this->Frequency(), $clean_up);
            
            // Get All Table Names From the Database
            $tables = array();
            $sql = "SHOW TABLES";
            $result = mysqli_query($this->Frequency(), $sql);
            while ($row = mysqli_fetch_row($result)) {
                $tables[] = $row[0];
            }
            $sqlScript = "";
            foreach ($tables as $table) {

                // Prepare SQLscript for creating table structure
                $query = "SHOW CREATE TABLE $table";
                $result = mysqli_query($this->Frequency(), $query);
                $row = mysqli_fetch_row($result);
                $sqlScript .= "\n\n" . $row[1] . ";\n\n";
                $query = "SELECT * FROM $table";
                $result = mysqli_query($this->Frequency(), $query);
                $columnCount = mysqli_num_fields($result);

                // Prepare SQLscript for dumping data for each table
                for ($i = 0; $i < $columnCount; $i ++) {
                    while ($row = mysqli_fetch_row($result)) {
                        $sqlScript .= "INSERT INTO $table VALUES(";
                        for ($j = 0; $j < $columnCount; $j ++) {
                            $row[$j] = $row[$j];
                        if (isset($row[$j])) {
                                $sqlScript .= '"' . $row[$j] . '"';
                            } else {
                                $sqlScript .= '""';
                            }
                            if ($j < ($columnCount - 1)) {
                                $sqlScript .= ',';
                            }
                        }
                        $sqlScript .= ");\n";
                    }
                }
                
                $sqlScript .= "\n"; 
            }

            if(!empty($sqlScript))
            {
                // Save the SQL script to a backup file
                $Date = Date("Y-m-d h:m:s");
                $backup_file_name = $this->Database.'_'.time().'_'.$Date.'_Data_backup.sql';
                $fileHandler = fopen($backup_file_name, 'w+');
                $number_of_lines = fwrite($fileHandler, $sqlScript);
                fclose($fileHandler); 

                // Download the SQL backup file to the browser
                header('Content-Description: File Transfer');
                header('Content-Type: application/octet-stream');
                header('Content-Disposition: attachment; filename=' . basename($backup_file_name));
                header('Content-Transfer-Encoding: binary');
                header('Expires: 0');
                header('Cache-Control: must-revalidate');
                header('Pragma: public');
                header('Content-Length: ' . filesize($backup_file_name));
                ob_clean();
                flush();
                readfile($backup_file_name);
                exec('rm ' . $backup_file_name); 
            }
        }
    }

    // INITILIAZE CLASS DATA BACKUP
    // ==============================================================================================================
    $new_backup = new Data_backup();

    // if request is to backup file
    // ================================================================================================================
    if(isset($_POST['data_backup'])){
        $new_backup->backup_data();
    }
?>