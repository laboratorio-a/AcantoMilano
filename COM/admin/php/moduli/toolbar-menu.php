<!--Inizio Toolbar Menu-->

<div class="user-profile-container">
    <div class="admin-bar">
    
        <ul>
        
        	<!--Inizio Account-->
        <?php if($_SESSION["accesso"] >= 2): else: ?>
         	<li>
            
            	<a href="index.php?pag=account" title="Account">
                
                	<i class="zmdi zmdi-account"> <!--Icona-->
                    </i>
                    
                </a>
             
            </li>
            <?php endif; ?>
            
            <!--Fine Account-->
            
            <!--Inizio Logout-->
            
            <li>
            
            	<a href="index.php?logoff" title="Logout">
                
                	<i class="zmdi zmdi-power"> <!--Icona-->
                    </i>
                    
                </a>
             
            </li>
            
            <!--Fine Logout-->
            
        </ul>
        
    </div>
</div>

<!--Fine Toolbar Menu-->