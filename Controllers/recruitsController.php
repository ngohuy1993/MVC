<?php

class recruitsController extends Controller
{
    protected $recruits;

    function __construct()
    {
        require(ROOT . 'Models/Recruits.php');
        $this->recruits = new Recruits();
    }

    function index()
    {

        $d['recruits'] = $this->recruits->showAllRecruits();

        $this->set($d);

        $this->render("index");
    }

    function create()
    {
        if (isset($_POST["ten"]))
        {
            
            /*echo '<pre>';
            print_r($_POST);
            echo '</pre>';
            die;*/
            if ($this->recruits->create($_POST["ten"], $_POST["sdt"], $_POST['email'], $_POST['ghichu']))
            {
                header("Location: " . WEBROOT . "recruits/success");
            }
        }

        $this->render("create");
    }

    function edit($id)
    {
        
        $d["task"] = $task->showTask($id);

        if (isset($_POST["title"]))
        {
            if ($task->edit($id, $_POST["title"], $_POST["description"]))
            {
                header("Location: " . WEBROOT . "tasks/index");
            }
        }
        $this->set($d);
        $this->render("edit");
    }

    function delete($id)
    {
       
        if ($task->delete($id))
        {
            header("Location: " . WEBROOT . "tasks/index");
        }
    }
    function success(){
        $this->render("success");
    }
}
?>