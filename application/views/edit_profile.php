<!DOCTYPE html>
<html lang="en">
<?php 
    
    $data_photo = $this->db->query("select * from photo where username='". $_SESSION['username']. "'");
    $data = $this->db->where('username', $_SESSION['username']);
    $data = $this->db->get('profile')->row_array();
    $jmlData = $data_photo->num_rows();
    foreach($data_photo->result() as $row[]){} 
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Profile | Vietgram</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <nav class="navigation">
        <div class="navigation__column">
            <a href="<?php base_url()?>feed">
                <img src="assets/images/logo.png" />
            </a>
        </div>
        <div class="navigation__column">
            <i class="fa fa-search"></i>
            <input type="text" placeholder="Search">
        </div>
        <div class="navigation__column">
            <ul class="navigations__links">
                <li class="navigation__list-item">
                    <a href="<?php base_url()?>feed/logout" class="navigation__link">
                        <i class="fa fa-sign-out"></i>
                    </a>
                </li>
                <li class="navigation__list-item">
                    <a href="#" class="navigation__link">
                        <i class="fa fa-compass fa-lg"></i>
                    </a>
                </li>
                <li class="navigation__list-item">
                    <a href="#" class="navigation__link">
                        <i class="fa fa-heart-o fa-lg"></i>
                    </a>
                </li>
                <li class="navigation__list-item">
                    <a href="<?php base_url()?>Profile" class="navigation__link">
                        <i class="fa fa-user-o fa-lg"></i>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <main id="edit-profile">
        <div class="edit-profile__container">
            <header class="edit-profile__header">
                <div class="edit-profile__avatar-container">
                    <img src="assets/images/avatar.jpg" class="edit-profile__avatar" />
                </div>
                <h4 class="edit-profile__username"><?php echo $_SESSION['username'];?></h4>
            </header>
            <form action="<?php base_url()?>edit_Profile/editprofile" class="edit-profile__form" method="post">
                <div class="form__row">
                    <label for="full-name" class="form__label">Name:</label>
                    <input name="name" type="text" class="form__input" value="<?php echo $data['name']?>"/>
                </div>
                <div class="form__row">
                    <label for="user-name" class="form__label">Username:</label>
                    <input name="user-name" type="text" class="form__input" value="<?php echo $_SESSION['username']?>" disabled/>
                </div>
                <div class="form__row">
                    <label for="website" class="form__label">Website:</label>
                    <input name="website" type="url" class="form__input" value="<?php echo $data['website']?>"/>
                </div>
                <div class="form__row">
                    <label for="bio" class="form__label">Bio:</label>
                    <textarea name="bio"><?php echo $data['bio']?></textarea>
                </div>
                <div class="form__row">
                    <label for="email" class="form__label">Email:</label>
                    <input name="email" type="email" class="form__input" value="<?php echo $data['email']?>"/>
                </div>
                <div class="form__row">
                    <label for="phone" class="form__label">Phone Number:</label>
                    <input name="nohp" type="tel" class="form__input" value="<?php echo $data['nohp']?>"/>
                </div>
                <div class="form__row">
                    <label for="gender" class="form__label">Gender:</label>
                    <select name="gender">
                        <?php
                            if($data['gender'] == 0) {
                        ?>
                            <option value="0" selected>Female</option>
                            <option value="1">Male</option>
                        <?php } else { ?>
                            <option value="0">Female</option>
                            <option value="1" selected>Male</option>
                        <?php } ?>
                        
                        
                    </select>
                </div>
                <input type="submit" value="Submit">
            </form>
        </div>
    </main>
    <footer class="footer">
        <div class="footer__column">
            <nav class="footer__nav">
                <ul class="footer__list">
                    <li class="footer__list-item"><a href="#" class="footer__link">About Us</a></li>
                    <li class="footer__list-item"><a href="#" class="footer__link">Support</a></li>
                    <li class="footer__list-item"><a href="#" class="footer__link">Blog</a></li>
                    <li class="footer__list-item"><a href="#" class="footer__link">Press</a></li>
                    <li class="footer__list-item"><a href="#" class="footer__link">Api</a></li>
                    <li class="footer__list-item"><a href="#" class="footer__link">Jobs</a></li>
                    <li class="footer__list-item"><a href="#" class="footer__link">Privacy</a></li>
                    <li class="footer__list-item"><a href="#" class="footer__link">Terms</a></li>
                    <li class="footer__list-item"><a href="#" class="footer__link">Directory</a></li>
                    <li class="footer__list-item"><a href="#" class="footer__link">Language</a></li>
                </ul>
            </nav>
        </div>
        <div class="footer__column">
            <span class="footer__copyright">© 2017 Vietgram</span>
        </div>
    </footer>
</body>

</html>