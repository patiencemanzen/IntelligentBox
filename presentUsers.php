<!-- 
	//////////////////////////////////////////////////////

    INTELLIGENT BOX
    DESIGNED & DEVELOPED by Manirabona Patience
    
    author: Mnirabona Patience,
    Email:  Hseal419@gmail.com,
    location: Kigali,Rwanda,
    pro: Intelligent Box E-learning,
    version: 1.0.0
    
	//////////////////////////////////////////////////////
-->

<?php 
    //  INITIALIZE DATABASE CONNECTION
    //  =============================================================================================================
    // ==============================================================================================================
    require_once ("Scyllar.php");
    // ==============================================================================================================

    // MAKE INTERFACE CALLED ASTEROID
    interface Asteroid {
        public function showEchinoderms ();
        public function showEchinoderms_trainers();
    }

    // INITIALIZE AND CONFIGURE CLASS CALLED TAXONOMIC
    // ============================================================================================================== 
    class Taxonomic extends Scyllar implements Asteroid {
        private $atmosphere;
        public $response;
        public $email;

        public function __construct($particle,$getEmail){
            $this->atmosphere = $particle;
            $this->email = $getEmail;
        }

        // FETCHING  PARTICLES
        // =============================================
        public function showEchinoderms(){
            $selectParticle = "SELECT * FROM $this->atmosphere WHERE email NOT IN (SELECT DISTINCT reciever_email FROM user_follow_board WHERE host_email='$this->email') AND email NOT IN (SELECT DISTINCT host_email FROM user_follow_board WHERE reciever_email='$this->email') AND email != '$this->email' AND title='student' AND Verified='complete'";
            $executeParticle = mysqli_query($this->Frequency(),$selectParticle);
            while($parts = mysqli_fetch_assoc($executeParticle)){
                $user_email = $parts['email'];

                // retrive profile image
                // ==============================================================================================
                $selectEchinodermFace = "SELECT profile_image FROM user_profile_image WHERE usr_email='$user_email' AND status_image='1'";
                $executeEchino = mysqli_query($this->Frequency(),$selectEchinodermFace);
                $fetchResult = mysqli_fetch_assoc($executeEchino);
                $result = $fetchResult['profile_image'];

                // retrive user biography
                // =============================================================================================
                $selectBio = "SELECT bio FROM user_bio WHERE email='$user_email' AND bio_status='on'";
                $executeBio = mysqli_query($this->Frequency(),$selectBio);
                $fetchBio = mysqli_fetch_assoc($executeBio);
                $bio = $fetchBio['bio']; ?>

                <div class="each-suggestion">
                    <div class="user-image-sug"><div class="display-sug-img"><img src="<?php echo 'Images/profile-img/profile-image/'.$result; ?>" alt="" width="100%" height="100%"></div></div>
                    <div class="user-detail-sug ml-2 mt-1">
                        <div class="user-sug-name d-flex">
                            <div class="user-email-name">
                                <span><?php echo $parts['firstName']; ?> <?php echo $parts['lastName']; ?></span>
                                <span><?php echo $parts['email']; ?></span>
                            </div>
                            <div class="follow-btn" id="<?php echo $parts['title']; ?>">
                                <button type="button" id="<?php echo $user_email; ?>" onclick="followUser(this)">Follow</button>
                            </div>
                        </div>
                        <div class="user-sug-bio"><?php echo $bio; ?></div>
                    </div>
                </div>

           <?php }
        }

        // FETCHING  PARTICLES
        // =============================================
        public function showEchinoderms_trainers(){
            $selectTrainer = "SELECT * FROM $this->atmosphere WHERE email NOT IN (SELECT DISTINCT reciever_email FROM user_follow_board WHERE host_email='$this->email') AND email NOT IN (SELECT DISTINCT host_email FROM user_follow_board WHERE reciever_email='$this->email') AND email != '$this->email' AND title='trainer' AND Verified='complete'";
            $executeTrainer = mysqli_query($this->Frequency(),$selectTrainer);
            while($rowTrainer = mysqli_fetch_assoc($executeTrainer)){
                $user_email = $rowTrainer['email'];

                // retrive profile image
                // ==============================================================================================
                $selectEchinodermFace = "SELECT profile_image FROM user_profile_image WHERE usr_email='$user_email' AND status_image='1'";
                $executeEchino = mysqli_query($this->Frequency(),$selectEchinodermFace);
                $fetchResult = mysqli_fetch_assoc($executeEchino);
                $result = $fetchResult['profile_image'];

                // retrive user biography
                // =============================================================================================
                $selectBio = "SELECT bio FROM user_bio WHERE email='$user_email'";
                $executeBio = mysqli_query($this->Frequency(),$selectBio);
                $fetchBio = mysqli_fetch_assoc($executeBio);
                $bio = $fetchBio['bio']; ?>

                <div class="each-suggestion-trainer">
                    <div class="user-image-sug"><div class="display-sug-img"><img src="<?php echo 'Images/profile-img/profile-image/'.$result; ?>" alt="" width="100%" height="100%"></div></div>
                    <div class="user-detail-sug ml-2 mt-1">
                        <div class="user-sug-name d-flex">
                            <div class="user-email-name">
                                <span><?php echo $rowTrainer['firstName']; ?> <?php echo $rowTrainer['lastName']; ?></span>
                                <span><?php echo $rowTrainer['email']; ?></span>
                            </div>
                            <div class="following-btn" id="<?php echo $rowTrainer['title']; ?>">
                                <button type="button" id="<?php echo $user_email; ?>" onclick="followUser(this)">Follow</button>
                            </div>
                        </div>
                        <div class="user-sug-bio"><?php echo $bio; ?></div>
                    </div>
                </div>

           <?php }
        }

    }

    // GETTING DATA INPUTED
    $tableName = "intelligent_users";

    // EXECUTE DATA CLASS AND IMPLEMENT
    // =================================================================================================
    // show student if it student request
    // =======================================
    if(isset($_POST['userStudentEmail'])){
        $getTaxonomic = new Taxonomic($tableName,$_POST['userStudentEmail']);
        $getTaxonomic->showEchinoderms();
    }

    // show trainer if it trainer request
    // ===================================
   if(isset($_POST['userTrainerEmail'])){
       $getTaxonomic = new Taxonomic($tableName,$_POST['userTrainerEmail']);
       $getTaxonomic->showEchinoderms_trainers();
   }
?>