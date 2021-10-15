<?php
class Operation
{
    function Operation()
    {
        $this->servername = "localhost";
        $this->username = "root";
        $this->password = "";
        $this->databasename = "project";
        // Create connection
        $this->conn = new mysqli(
            $this->servername,
            $this->username,
            $this->password,
            $this->databasename
        );
        // Check connection
        //                if ($this->conn->connect_error)
        //                {
        //                  die("Connection failed: " . $this->conn->connect_error);
        //                }
        //                  //echo "Connected successfully...."."<br>";
        //
    }

    function insert(
        $name,
        $clgnm,
        $year,
        $branch,
        $admssn,
        $email,
        $username,
        $password
    ) {
        $this->sql = "INSERT INTO studentlog(name,clgnm,yr,branch,admsn,email,username,password)
VALUES ('$name','$clgnm','$year','$branch','$admssn','$email','$username','$password')";
    }

    function login($username, $password)
    {
        $this->sql = "select * from studentlog where username='$username' AND password='$password'";
    }
    function statusInsert($nameo, $status, $date, $image)
    {
        $this->sql = "insert into comment(name,status,date,image,mark)values('$nameo','$status','$date','$image',0)";
    }
    function statusDisplay()
    {
        $this->sql =
            "select * from comment left join replayTbl on comment.id=replayTbl.idid ORDER BY id DESC;";
    }
    function replaySystem($idid, $name, $replay, $date)
    {
        $this->sql = "insert into replayTbl(idid,rname,replay,rdate)values('$idid','$name','$replay','$date')";
    }
    function replayDisplay($idid)
    {
        $this->sql = "select * from replayTbl where idid='$idid' ORDER BY id DESC";
    }
    function imgInsert($image, $id, $job, $about)
    {
        $this->sql = "UPDATE studentlog SET image='$image', job='$job', about='$about' WHERE id='$id'";
    }
    function propic($id)
    {
        $this->sql = "select * from studentlog where id='$id'";
    }
    function notificarionSystm($name)
    {
        $this->sql = "select * from replayTbl left join comment on comment.id=replayTbl.idid WHERE name='$name' ORDER BY rdate DESC";
    }
    function studentView($name)
    {
        $this->sql = "select * from studentlog where username='$name'";
    }
    function techerInsert(
        $name,
        $clgnm,
        $yr,
        $branch,
        $admsn,
        $username,
        $password
    ) {
        $this->sql = "insert into studentlog(name,clgnm,yr,branch,admsn,username,password)values('$name','$clgnm','$yr','$branch','$admsn','$username','$password')";
    }
    function VideoFunction($new_video_name, $branch, $sem, $subject, $username)
    {
        $this->sql = "INSERT INTO videos(video_url,branch,sem,subject,username) 
                   VALUES('$new_video_name','$branch','$sem','$subject','$username')";
    }
    function videoDisplay($username)
    {
        $this->sql = "select * from videos where username='$username' ORDER BY id DESC";
    }
    function videoDelete($id)
    {
        $this->sql = "DELETE FROM videos WHERE id='$id'";
    }
    function AllVideos()
    {
        $this->sql = "select * from videos ORDER BY id DESC";
    }
    function maximise($id)
    {
        $this->sql = "SELECT * FROM videos WHERE id='$id'";
    }
    function stuentvideoDisplay($branch)
    {
        $this->sql = "select * from videos where branch='$branch' ORDER BY id DESC";
    }
    function senderFunction($sender, $receiver, $message)
    {
        $this->sql = "insert into chats(sn,sm,rn,seen)values('$sender','$message','$receiver',0)";
    }
    function messagereceive($sender, $receiver)
    {
        $this->sql = "SELECT * FROM chats WHERE sn='$sender' AND rn='$receiver' OR sn='$receiver' AND rn='$sender' ORDER BY id DESC";
    }
    function messagesFunction($username)
    {
        $this->sql = "select DISTINCT sn id from chats where rn='$username' AND seen=0 ORDER BY id DESC";
    }
    function statusnotify($na)
    {
        $this->sql = "select * from replayTbl left join comment on comment.id=replayTbl.idid WHERE name='$na' AND mark=0 ORDER BY rdate DESC";
    }
    function notifyreset($na)
    {
        $this->sql = "update comment set mark=1 where name='$na'";
    }
    function msgSeenAction($na)
    {
        $this->sql = "update chats set seen=1 where rn='$na'";
    }
    function searcH($name)
    {
        $this->sql = "select id,name,clgnm,branch,username,image from studentlog where name like '%$name%'";
    }
    function forGet($name, $id)
    {
        $this->sql = "SELECT * FROM `studentlog` WHERE name='$name' && admsn='$id'";
    }
    function passWprd($fpass, $id)
    {
        $this->sql = "UPDATE studentlog SET password='$fpass' WHERE id='$id'";
    }

    function executeQuery()
    {
        $this->result = mysqli_query($this->conn, $this->sql);
        return $this->result;
    }
}

?>
