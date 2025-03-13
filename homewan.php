


<html>
    <head>
        <title>
            STUDENT INFORMATION SYSTEM
        </title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        
    </head>

    <body>
    <style>
        
        body 
        {
            background-image: url(1.jpg);
            background-repeat: no-repeat;
            background-position: right;
            background-position: 480px;
            background-size: 730px;
            image-resolution:unset;
            background-color: #7469B6;
         
        }

        .option a
        {
            color: black;
            font-size: 32px;
        }

        .home 
        {
            font-family: Monotype Corsiva;
            color: black;
            font-size: 20px;
            position: absolute;
            right: 440px;
            top: 35px;
        }

        .about
        {
            font-family: Monotype Corsiva;
            color: black;
            font-size: 25px;
            position: absolute;
            right: 60px;
            top: 35px;
        }

        .guide
        {
            font-family: Monotype Corsiva;
            color: black;
            font-size: 30px;
            position: absolute;
            right: 205px;
            top: 35px;
        }

        .option h4
        {
            color: black;
            font-size: 30px;
            margin-top: 40px;
            margin-left: 15px;
        }

        .option :hover
        {
            color:khaki;
        }

        .slct 
        {
            text-decoration: none;
        }

        .des
        {
            text-decoration: none;
        }

        .rgstr
        {
            text-decoration: none;
        }

        .desc h3 
        {
            color: black;
            font-size: 30px;
        }

        .desc h4 
        {
            color: white;
            font-size: 18px;
            font-family: calibri;
        }

        .desc button :hover
        {
            color: black;
        }

        .register button :hover
        {
            color: black;
        }

        .register h3 
        {
            color: black;
            font-size: 35px;
        }

        .register h4 
        {
            color: white;
            font-size: 20px;
            font-family: calibri;
        }

        .register img
        {
            position: absolute;
            left: 100px;
            top: 600px;
        }
        
        </style>

         <div class="option">
            <ul class="auto_list">
                   <h4><i class="bi bi-envelope-paper"> GO VOTE </i></h4>

                    <div class="home">
                    <a onclick="showDashboard()" id="db_btn" class="slct" href="#"> HOME  | </a>
                    </div>

                    <div class="guide">
                    <a onclick="showDashboard()" id="db_btn" class="slct" href="guide.php"> GUIDELINES | </a>
                    </div>

                    <div class="about">
                    <a onclick="showDashboard()" id="db_btn" class="slct" href="#"> ABOUT | </a>
                    </div>
            </ul>   
            </div>

            <div class="desc">
            <table>
            <td style="position: absolute;  left: 60px; top: 230px;" >
            <center>
            <h3> ONLINE VOTING SYSTEM </h3>
            <h4> Online voting system are software platforms used to <br> securely conduct votes and elections. 
                 As a digital platform, <br> they eliminate the need to cast your votes using <br>  paper or having to gather in person. 
            </h4>

            <button style="font-family:'Times New Roman', Times, serif; font-size: 28px; border-radius: 20px;"><a class="des" href="login.php"> Vote NOW </a></button>
            </center>
            </td>
            </table>
            </div>

            <div class="register">
            <table>
            <img src="3.jpg" alt="">
            <td style="position: absolute;  right: 80px; top: 700px;" >
            
            <center>
            <h3> REGISTRATION </h3>
            <h4> This process typically involves providing personal <br> information such as name, address, date of birth, and <br> sometimes identification numbers
            </h4>

            <button style="font-size: 25px; border-radius: 20px;"><a class="rgstr" href="login.php"> Register NOW </a></button>
            </center>
            </td>   
            </table>
            </div>
              
        </div>
        
    </body>
</html>