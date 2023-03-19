<style>
    body {
        padding: 0;
        margin: 0;
        overflow: hidden;
    }

    #sidebar {
        padding: 1.5vw;
        -webkit-box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.52);
        -moz-box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.52);
        box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.52);
        width: fit-content;
        height: 100vh;
        overflow: auto;
        display: flex;
        justify-content: space-between;
        flex-direction: column;
    }

    a {
        margin: 0;
        padding: 0;
        text-decoration: none;
    }

    .sidebar-box{
        display: flex;
        border-radius: 9px;
        gap: 1.5vw;
        padding: 0.9vw;
        padding-right: 8vw;
        align-items: center;
        width: auto;
        height: min-content;
        margin-top: 1vh;
        -webkit-box-shadow: 0px 0px 2.5px 0px rgba(0, 0, 0, 0.52);
        -moz-box-shadow: 0px 0px 2.5px 0px rgba(0, 0, 0, 0.52);
        box-shadow: 0px 0px 2.5px 0px rgba(0, 0, 0, 0.52);
        cursor: pointer;
        color: hsla(0, 0%, 0%, 0.7);
    }

    .sidebar-box:hover {
        color: #1a8766;
    }


    #logo {
        top: 0;
        width: 10vw;
        display: block;
        margin: auto;
        margin-bottom: 1vw;
    }

    .sidebar-text {
        font-size: 1.15rem;
        font-family: ExtraBold;
    }

    #sidebar-content {
        display: flex;
        flex-direction: column;
    }

    .nav-link {
        text-decoration: none;
    }

    .profile-image {
        width: 3.5vw;
        border-radius: 50px;
        border: #1a8766 solid 2px;
        -webkit-box-shadow: 0px 0px 3px 0px rgba(0, 0, 0, 0.52);
        -moz-box-shadow: 0px 0px 3px 0px rgba(0, 0, 0, 0.52);
        box-shadow: 0px 0px 3px 0px rgba(0, 0, 0, 0.52);
    }

    .sidebar-image {
        width: 2vw;
    }

    .bottom-box {
        display: flex;
        border-radius: 9px;
        gap: 1.5vw;
        padding: 0.9vw;
        padding-right: 8vw;
        align-items: center;
        width: auto;
        height: min-content;
        -webkit-box-shadow: 0px 0px 2.5px 0px rgba(0, 0, 0, 0.52);
        -moz-box-shadow: 0px 0px 2.5px 0px rgba(0, 0, 0, 0.52);
        box-shadow: 0px 0px 2.5px 0px rgba(0, 0, 0, 0.52);
        cursor: pointer;
        color: hsla(0, 0%, 0%, 0.7);
        margin-bottom: 5vh;
    }

    #sidebar-justifier {
        display: flex;
        flex-direction: column;
    }
</style>

<div id="sidebar">
    <div id="sidebar-content">
        <img id="logo" src="./img/logo/sensorify-dark.png" alt="sensorify-logo">
        <?php
        $content = array(
            "Overview",
            "Map",
            "Config",
            "Devices",
            "Users",
            "History",
            "Docs",
            "Rooms",
            "User"
        );
        $icons = array(
            "./img/sidebar/grey/overview.svg",
            "./img/sidebar/grey/maps.svg",
            "./img/sidebar/grey/json.svg",
            "./img/sidebar/grey/sensors.svg",
            "./img/sidebar/grey/users.svg",
            "./img/sidebar/grey/history.svg",
            "./img/sidebar/grey/docs.svg",
            "./img/sidebar/grey/rooms.svg",
            "./img/sidebar/grey/user.svg"
        );
        for ($i = 0; $i < sizeof($icons) - 1; $i++) {
            echo "
            <a href='#' class='nav-link'>
                <div class='sidebar-box'>
                    <img class='sidebar-image no-drag' src='" . $icons[$i] . "' alt='nav-icon'>
                    <div class='sidebar-text no-select'>" . $content[$i] . "</div>
                </div>
            </a>
        ";
        }

        require_once "./classes/repositories/UserRepository.class.php";

        $user_repo = new UserRepository();

        $image_src = $user_repo->getImageSrcByUserName($_SESSION['username']);
        echo " </div>";
        echo "
        <a href='#'>
            <div class='bottom-box'>
                <img class='profile-image no-drag' src='" . $image_src . "' alt='nav-icon'>
                <div class='sidebar-text no-select' style='font-size:1.2rem;'>" . $_SESSION['username'] . "</div>
            </div>
        </a>
";
        ?>

    </div>
</div>