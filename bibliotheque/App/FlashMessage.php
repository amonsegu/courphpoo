<?php


namespace App;


class FlashMessage
{
    public static function set(string $message, $type = 'success')
    {
        $_SESSION['flashMessage'] = [
          'message' => $message,
            'type' => $type
        ];
    }

    public static function display()
    {
        if(isset($_SESSION['flashMessage'])){
            $alert = '<div class="text-center alert alert-'
                . $_SESSION['flashMessage']['type']
                .'">'
                . $_SESSION['flashMessage']['message']
                . '</div>';

            echo $alert;

            unset($_SESSION['flashMessage']);

        }


    }
}