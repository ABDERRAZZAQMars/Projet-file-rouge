<?php
class ContactController
{
    public function getAllClients()
    {
        $contact = Contact::getAll();
        return $contact;
    }

    public function envoyer()
    {
        if (isset($_POST['envoyer'])) {
            $contact = Contact::contact_message($_POST['nom'], $_POST['objet'], $_POST['email'], $_POST['phone'], $_POST['message']);
            if ($contact) {
                echo '<script src="views/assets/js/envoyer.js"></script>';
            } else {
                echo '<script src="views/assets/js/noenvoyer.js"></script>';
            }
        }
    }
}
