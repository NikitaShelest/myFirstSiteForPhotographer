<?php


class db
{
    public $pdo;

    public function __construct() {
        try {
            $this->pdo = new PDO('mysql:host=localhost;dbname=portfolio_photographer', 'root', 'root');
        } catch (PDOException $e) {
            exit($e->getMessage());
        }
    }

    public function addOrder($full_name, $phone, $socialNetworks, $subject ,$date_order) {
        $sth = $this->pdo->prepare("INSERT INTO registration(full_name, phone, socialNetworks, subject, date_order) VALUES(:full_name, :phone, :socialNetworks, :subject, :date_order)");
        $sth ->bindParam(':full_name', $full_name);
        $sth ->bindParam(':phone', $phone);
        $sth ->bindParam(':socialNetworks', $socialNetworks);
        $sth ->bindParam(':subject', $subject);
        $sth ->bindParam(':date_order', $date_order);
        $sth ->execute();
    }

    public function giveOrder(){
        $sth = $this->pdo->query("SELECT * FROM `registration` ORDER BY `date_order` DESC");
        $date = $sth->fetchAll();
        return $date;
    }

    public function acceptOrder($phone){
        $sth = $this->pdo->prepare("UPDATE registration SET state='Обработаная' WHERE phone='$phone'");
        $sth ->execute();
    }

    public function deleteOrder($phone){
        $sth = $this->pdo->prepare("DELETE FROM registration WHERE phone = :phone");
        $sth ->bindParam(':phone', $phone);
        $sth ->execute();
    }

    public function updateContact($full_name, $phone, $instagram, $facebook, $vk) {
        $sth = $this->pdo->prepare("UPDATE contacts SET full_name=:full_name, phone=:phone, instagram=:instagram, facebook=:facebook, vk=:vk");
        $sth ->bindParam(':full_name', $full_name);
        $sth ->bindParam(':phone', $phone);
        $sth ->bindParam(':instagram', $instagram);
        $sth ->bindParam(':facebook', $facebook);
        $sth ->bindParam(':vk', $vk);
        $sth ->execute();
    }

    public function issuingContact(){
        $sth = $this->pdo->query("SELECT * FROM `contacts`");
        $date = $sth->fetchAll();
        return $date;
    }

    public function updateAbout($head, $opening) {
        $sth = $this->pdo->prepare("UPDATE about SET head=:head, opening=:opening");
        $sth ->bindParam(':head', $head);
        $sth ->bindParam(':opening', $opening);
        $sth ->execute();
    }

    public function issuingAbout(){
        $sth = $this->pdo->query("SELECT * FROM `about`");
        $date = $sth->fetchAll();
        return $date;
    }

    public function addPhotoGallery($photo, $type) {
        $sth = $this->pdo->prepare("INSERT INTO gallery(link, type) VALUES(:link, :type)");
        $sth ->bindParam(':link', $photo);
        $sth ->bindParam(':type', $type);
        $sth ->execute();
    }

    public function deletePhotoGallery($link){
        $sth = $this->pdo->prepare("DELETE FROM gallery WHERE link = :link");
        $sth ->bindParam(':link', $link);
        $sth ->execute();
    }

    public function issuingGallery($limit, $offset){
        $sth = $this->pdo->query("SELECT * FROM `gallery`  ORDER BY `id` DESC LIMIT $limit OFFSET $offset" );
        $date = $sth->fetchAll();
        return $date;
    }

    public function issuingGalleryType($type_img){
        $sth = $this->pdo->query("SELECT * FROM `gallery` WHERE type='$type_img'");
        $date = $sth->fetchAll();
        return $date;
    }

    public function countGallery(){
        $sth = $this->pdo->query("SELECT COUNT(1) FROM `gallery`");
        $date = $sth->fetchAll();
        return $date;
    }

    public function issuingSlaiderImage() {
        $sth = $this->pdo->query("SELECT * FROM `gallery` ORDER BY RAND() LIMIT 5");
        $date = $sth->fetchAll();
        return $date;
    }

    public function addFeedback($name, $text, $date) {
        $sth = $this->pdo->prepare("INSERT INTO feedback(name, text, date) VALUES(:name_user, :text_fb, :date_fb)");
        $sth ->bindParam(':name_user', $name);
        $sth ->bindParam(':text_fb', $text);
        $sth ->bindParam(':date_fb', $date);
        $sth ->execute();
    }

    public function selectFeedback(){
        $sth = $this->pdo->query("SELECT * FROM `feedback` ORDER BY `date` DESC");
        $date = $sth->fetchAll();
        return $date;
    }

    public function updateAboutMe($text){
        $sth = $this->pdo->prepare("UPDATE aboutme SET text=:text");
        $sth ->bindParam(':text', $text);
        $sth ->execute();
    }

    public function selectAboutMe(){
        $sth = $this->pdo->query("SELECT * FROM `aboutme`");
        $date = $sth->fetchAll();
        return $date;
    }
}