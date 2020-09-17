
<?php
	// INITIALIZE DATABASE CONNECTION
	// ========================================================================================================
	require_once ("../Scyllar.php");
	// ========================================================================================================

	// INITIALIZE CLASS DATA RESTORE
	// ========================================================================================================
	class Data_restore extends Scyllar {
		public function Restore($data_file_sql){
			$query = '';
			$sqlScript = file($data_file_sql);
			foreach ($sqlScript as $line)	{
				
				$startWith = substr(trim($line), 0 ,2);
				$endWith = substr(trim($line), -1 ,1);
				
				if (empty($line) || $startWith == '--' || $startWith == '/*' || $startWith == '//') {
					continue;
				}
					
				$query = $query . $line;
				if ($endWith == ';') {
					mysqli_query($this->Frequency(),$query) or die('Problem in executing the SQL query <b>' . $query. '</b>');
					$query= '';		
				}
			}
			echo 'SQL file imported successfully';
		}

		public function Secord_methord($data_file_sql){
			$filePath   = $data_file_sql;

			// Temporary variable, used to store current query
			$templine = '';
			
			// Read in entire file
			$lines = file($filePath);
			
			$error = '';
			
			// Loop through each line
			foreach ($lines as $line){
				// Skip it if it's a comment
				if(substr($line, 0, 2) == '--' || $line == ''){
					continue;
				}
				
				// Add this line to the current segment
				$templine .= $line;
				
				// If it has a semicolon at the end, it's the end of the query
				if (substr(trim($line), -1, 1) == ';'){
					// Perform the query
					if(!mysqli_query($this->Frequency(), $templine)){
						$error .= 'Error performing query "<b>' . $templine . '</b>": ' . $this->Frequency()->error . '<br /><br />';
					}
					
					// Reset temp variable to empty
					$templine = '';
				}
			}
			return !empty($error)?$error:true;
		}
	}

	// EXECUTE CLASS RESTORE
	// ======================================================================================================================
	$new_restore = new Data_restore();

	// if request is to restore given database
	// =======================================================================================================================
	if(isset($_POST['data_store'])){
		$new_restore->Restore($_POST['data_store']);
	}
?>