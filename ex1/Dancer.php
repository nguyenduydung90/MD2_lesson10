<?php


class Dancer
{
    public $name;
    public $gender;

    public function __construct($name = null, $gender = null)
    {
        $this->name = $name;
        $this->gender = $gender;
    }

    /**
     * @return mixed|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed|null $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed|null
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * @param mixed|null $gender
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
    }

}
$person1=new Dancer('Dung Tomorrow','male');
$person2=new Dancer('Duong','male');
$person3=new Dancer('Viet','male');
$person4=new Dancer('Trong choa','male');
$person5=new Dancer('link Lee','female');
$person6=new Dancer('Quynh','female');
$person7=new Dancer('Tran Duc Bo','female');

$man= new SplQueue();
$woman=new SplQueue();

$man->enQueue($person1);
$man->enQueue($person2);
$man->enQueue($person3);
$man->enQueue($person4);

$woman->enQueue($person5);
$woman->enQueue($person6);
$woman->enQueue($person7);

//function checkMale($person){
//    $man = new SplQueue();
//    $woman = new SplQueue();
//    if($person->getGender()==='male') {
//        $man->enqueue($person->getName());
//
//    }else{
//        $woman->enqueue($person->getName());
//    }
//        return $man.$woman;
//
//}

function getCouple($man, $woman)
{
    if (count($man) == 0 || count($woman) == 0) {
        echo 'Chua co nguoi de ghep'." Số bạn đang chờ ghép: ".waitPerson($man,$woman);;
    }
    echo 'cặp nhảy vơi nhau gồm ' . $man->dequeue()->name . ' và ' . $woman->dequeue()->name;
}

function waitPerson($man,$woman){
if (count($man)-count($woman)>0){
    return count($man);
}return count($woman);


}


getCouple($man, $woman);
echo '<br>';
getCouple($man, $woman);
echo'<br>';
getCouple($man, $woman);
echo'<br>';
getCouple($man, $woman);
echo'<br>';


