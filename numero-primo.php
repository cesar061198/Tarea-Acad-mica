<form action="" method="POST">
        <h3> Ver si es primo</h3> </br>
        <input type="text" name="primo"/>
        <input type="submit" name="submit" value="Ver si es primo">
</form>

<?php

if(isset($_POST["primo"]))
{
    $numero=$_POST["primo"];

    function fun1($val)
    {
        $divisible=0;
        if ($val>0) 
        {
            for ($i=$val;$i>0;$i--) 
            {
                if ($val%$i==0) 
                {
                    $divisible++;
                }
            }
        }

        if ($divisible==2) 
        {
            echo ("{$val} es Primo");
        }
        else
        {
            echo ("{$val} es No es Primo");
        }
    }
    fun1($numero);
}
?>
