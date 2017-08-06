<!DOCTYPE html>
<html lang="en">
<?php include("/includes/header.php"); ?>
<body>

  <!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <div class="container">
    <header>
      <div id="header-bg-img" class="row">
          <div class="four columns" id="logo"></div>
          <div class="four columns" id="header-text">Practice Areas</div>
          <div class="four columns" id="contact">
            <div id="contact-button">
              <a href="contact.php">
              CONTACT <br />
              Alpert Law Firm</a>
            </div>
          </div>
        </div>
    </header>
    <nav>
    <div class="five columns" id="nav">
        <?php include("/includes/nav-practice-areas.php"); ?>
    </div>
     </nav>
    <section>
    <div class="seven columns" id="body-content">
        <p>Alpert Law Firm specialises in the following areas:</p>
        <ul>
          <li><a href="corporate.php">Corporate and Commercial</a></li>
          <li><a href="estateadmin.php">Estate Administration</a></li>
          <li><a href="estateplanning.php">Estate Planning</a></li>
          <li><a href="taxdispute.php">Tax Dispute Resolution</a></li>
          <li><a href="taxlitigation.php">Tax Litigation</a></li>
          <li><a href="taxplanning.php">Tax Planning</a></li>
          <li><a href="wealth.php">Wealth Preservation</a></li>
        </ul>
        
        <footer>
           <?php include("/includes/footer.php"); ?>
        </footer>
    </div>
    </section>

  </div>


<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>
</html>
