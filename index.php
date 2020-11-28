<?php
    session_start();
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        if (empty($_SESSION["utm_source"])) {
            if (!empty($_GET["utm_source"])) {
                $_SESSION["utm_source"] = $_GET["utm_source"];
                $_SESSION["utm_medium"] = $_GET["utm_medium"];
                $_SESSION["utm_campaign"] = $_GET["utm_campaign"];
                $_SESSION["utm_content"] = $_GET["utm_content"];
                $_SESSION["utm_term"] = $_GET["utm_term"];
            }
        }

        $url = parse_url($_SERVER['REQUEST_URI']);
        $path = explode("/", trim($url["path"], "/"));

        require_once 'config.php';
        $sql = "SELECT * FROM pages WHERE level=2 OR level=3";
        $res = $conn->query($sql);
        while ($row = $res->fetch_assoc()) {
            $sidebar[] = $row;
        }

        if (!empty($path[0])) {
            if (!empty($path[1])) {
                $sql = "SELECT * FROM pages WHERE url='$path[1]'";
                $res = $conn->query($sql);
                while ($row = $res->fetch_assoc()) {
                    $notes[] = $row;
                }

                $conn->close();
                require_once 'templates/note.php';
            } elseif ($path[0] == 'spasibo') {
                require_once 'templates/spasibo.php';
            } else {
                $sql = "SELECT * FROM pages WHERE url='$path[0]'";
                $res = $conn->query($sql);
                while ($row = $res->fetch_assoc()) {
                    $notes[] = $row;
                }

                $sql = "SELECT * FROM pages WHERE parent_id={$notes[0]['id']}";
                $res = $conn->query($sql);
                while ($row = $res->fetch_assoc()) {
                    $notes[] = $row;
                }

                $conn->close();
                require_once 'templates/section.php';
            }
        } else {
            $sql = "SELECT * FROM pages WHERE level=2 OR level=3";
            $res = $conn->query($sql);
            while ($row = $res->fetch_assoc()) {
                $notes[] = $row;
            }
            $conn->close();
            require_once 'templates/main.php';
        }
    } elseif ($_SERVER["REQUEST_METHOD"] == "POST") {
        $to = 'sales@kitstroy.one';
        $subject = 'Новая заявка - тема: ' . $_POST["form_name"];
        $message = 'Название формы: ' . $_POST["form_name"] . "\r\n" .
            'Телефон: ' . $_POST["phone"] . "\r\n" .
            'Описание формы: ' . $_POST["form_description"] . "\r\n" .
            'Страница: ' . $_SERVER["HTTP_REFERER"] . "\r\n" .
            'utm_source: ' . $_SESSION["utm_source"] . "\r\n" .
            'utm_medium: ' . $_SESSION["utm_medium"] . "\r\n" .
            'utm_campaign: ' . $_SESSION["utm_campaign"] . "\r\n" .
            'utm_content: ' . $_SESSION["utm_content"] . "\r\n" .
            'utm_term: ' . $_SESSION["utm_term"] . "\r\n";
        $headers = 'From: p20200330@gmail.com' . "\r\n" .
            'Reply-To: prstroit@gmail.com' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();
        mail($to, $subject, $message, $headers);

        $to = 'prstroit@gmail.com';
        $subject = 'Новая заявка - тема: ' . $_POST["form_name"];
        $message = 'Название формы: ' . $_POST["form_name"] . "\r\n" .
            'Телефон: ' . $_POST["phone"] . "\r\n" .
            'Описание формы: ' . $_POST["form_description"] . "\r\n" .
            'Страница: ' . $_SERVER["HTTP_REFERER"] . "\r\n" .
            'utm_source: ' . $_SESSION["utm_source"] . "\r\n" .
            'utm_medium: ' . $_SESSION["utm_medium"] . "\r\n" .
            'utm_campaign: ' . $_SESSION["utm_campaign"] . "\r\n" .
            'utm_content: ' . $_SESSION["utm_content"] . "\r\n" .
            'utm_term: ' . $_SESSION["utm_term"] . "\r\n";
        $headers = 'From: p20200330@gmail.com' . "\r\n" .
            'Reply-To: prstroit@gmail.com' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();
        mail($to, $subject, $message, $headers);

        header('Location: /spasibo');
    }
?>

