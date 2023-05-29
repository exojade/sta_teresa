<style>
  .navbar-nav li a{
    font-size:120% !important;
  }
</style>

<div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="index">Dashboard </a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Burial Contract <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="burial_contract?action=new">Add New</a></li>
                <li><a href="burial_contract?action=list">List</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Statement of Account <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
               <?php $guarantors = query("select * from guarantors");
               foreach($guarantors as $g):?>
                  <li><a href="soa?action=list&id=<?php echo($g["tbl_id"]); ?>"><?php echo($g["guarantor"]); ?></a></li>
               <?php endforeach; ?>
              </ul>
            </li>
            <li><a href="#">Salary Report </a></li>
            <li><a href="#">Users </a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Reports <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Sales Revenue</a></li>
                <li><a href="#">Casket Sold</a></li>
                <li><a href="#">List of Deceased Report</a></li>
                <li><a href="#">Collectibles Report</a></li>
              </ul>
            </li>
          </ul>
        </div>