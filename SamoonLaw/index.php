<?php session_start();
include ('../SamoonLaw/loginsystem/includes/config.php');
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Archer & Associates</title>
    <link rel="stylesheet" href="front.css" />
    <link rel="icon" href="3.png" type="image/png">
    <link
      rel="stylesheet"
      href="https://cdn-uicons.flaticon.com/2.1.0/uicons-solid-straight/css/uicons-solid-straight.css"
    />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <script
      src="https://kit.fontawesome.com/66c513f4f9.js"
      crossorigin="anonymous"
    ></script>

    <style>
.material-symbols-outlined {
  font-variation-settings:
  'FILL' 1 ,
  'wght' 500,
  'GRAD' 0,
  'opsz' 20
}
</style>
  </head>
  <body>
    <!--- part1 -->
    <?php include('navbar.php'); ?>
    <!-- part2 -->
   
    <div class="image2">
      <img src="3.jpg" alt="Archer&associates.jpg" />
    </div>
    <!-- part3 -->


     <?php include('middlebar.php'); ?>

   
    <!---ANNOUNCEMENT -->
    <div class="announcement">
      <marquee
        ><b>
           <?php
            $sql = "SELECT * FROM knowledgebase ORDER BY Id DESC LIMIT 2";
            $result = $con->query($sql);
            
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $fileName = $row["doc"];
                    $imageUrl = "./loginsystem/admin/Notif/" . $fileName;
                    ?>
                    
                        <?php echo $row['Title']; ?>
                            <a class="stretched-link" href="<?php echo $imageUrl; ?>">click.</a>
                            &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;
                            
                    
                    <?php 
                } 
            } 
            ?>
            
           
          
          </b
        ></marquee
      >
    </div  >
    <!-- part4 -->
    <div class="flex-container1" >
    <div style="padding: 20px; max-width: 100%; box-sizing: border-box;">
    <h4 style="font-size: 2rem;">Founder's Note</h4>
    <hr />

    <!-- Responsive Image -->
    <img src="team/11.jpg" style="border-radius: 50%; width: 20%; max-width: 100px; height: auto; float: left; margin-right: 20px;">

    <!-- Responsive Scrollable Text Section -->
    <p style="height: 300px; width: 100%; max-width: 600px; overflow-y: auto; color: black; text-align: left; padding: 10px; margin-left: 0;">
        At Archer and Associates, our mission has always been to provide thoughtful, diligent, and results-driven legal services to our clients. When I founded the firm, I envisioned creating a legal practice built on the principles of integrity, professionalism, and an unwavering commitment to justice. Over the years, our firm has grown, but these core values remain at the heart of everything we do.
        <br><br>
        Every case we handle is approached with the same dedication and attention to detail, no matter how complex or straightforward it may be. I believe in the importance of understanding the unique circumstances of each client, offering personalized legal guidance that addresses their specific needs and goals. Whether it’s a matter of civil litigation, criminal defense, intellectual property, or family law, we strive to navigate the legal landscape with clarity, precision, and compassion.
        <br><br>
        I am proud of the team we’ve built at Archer and Associates—professionals who share a deep commitment to justice and to serving our clients with excellence. We continue to adapt and evolve with the changing legal environment, always ensuring that our clients are informed and empowered at every stage.
        <br><br>
        Thank you for trusting us to stand by your side. It is a privilege to do this work, and we are honored to be a part of your legal journey.
        <br><br>
        Sincerely,<br>
        Advocate Archer<br>
        Founder, Archer and Associates
    </p>
</div>

      
     <div style="padding: 20px; max-width: 100%; box-sizing: border-box;">
    <h4 style="font-size: 2rem;">Knowledge Base</h4>
    <hr />

    <!-- Scrollable Knowledge Base Section -->
    <div style="height: 300px; max-width: 100%; overflow-y: auto; width: 100%; max-width: 600px; padding: 10px; margin-left: 0;">
    <table border="0" style="width: 100%; border-collapse: separate; border-spacing: 0 15px;">
    <?php
    $sql = "SELECT * FROM knowledgebase ORDER BY Id DESC Limit 10";
    $result = $con->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $fileName = $row["doc"];
            $imageUrl = "./loginsystem/admin/Notif/" . $fileName;
            ?>
            <tr>
                <!-- Notification Text -->
                <td style="padding: 10px; font-size: 1.1rem; border-bottom: 1px solid #ccc;">
                    <?php echo $row['Title']; ?>
                </td>

                <!-- Button for Click -->
                <td style="text-align: right; padding: 10px;">
                    <a href="<?php echo $imageUrl; ?>" style="text-decoration: none; padding: 8px 16px; background-color: #266470; color: white; border-radius: 5px; font-size: 1rem;">View</a>
                </td>
            </tr>
        <?php }
    } ?>
</table>

    </div>

    <!-- View More Button -->
    <button class="button" style="margin-top: 10px; padding: 10px 20px; background-color: #266470; color: white; border: none; border-radius: 5px; cursor: pointer;" onclick="window.location.href = 'notification.php';">View More</button>
</div>
    </div>
    


    <!--Part 5 -->

    <div>       
        <?php include 'Practice.php'; ?>
      </div>
   
    <div >       
        <?php include 'Team.php'; ?>
      </div>
      <div style="background-color:white;height:100px;">
      </div>

      <div>       
      <?php include 'Contactus.php'; ?>
      </div>
    
  
 <div style="background-color:white;height:100px;">
 </div>

 <div>
  <?php include('footer.php'); ?>
 </div>

  </body>
  
</html>
