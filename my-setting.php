<?php                     
if(!isset($_COOKIE['loggedin'])) {
header("Location: index.php?login=true");  
}
?>    
<?php include 'include/template_header.php'; ?>
<section class="banner-sm">
    <img src="assets/images/banner-sm.jpg" alt="" class="banner-img">
    <div class="container">
        <div class="banner-title">
         Account Setting
        </div>
    </div>
</section>
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="user-card">
                    <div class="user-title">
                        Personal Details
                    </div>
                    <div class="row personal-inputs">
                        <div class="col-12 col-sm-6 col-lg-3">
                            <div class="icrest-input">
                                <label>Full Name</label>
                                <input type="text" placeholder="Name" value="Ajay Dodiya" disabled>
                            </div>                            
                        </div>  
                        <div class="col-12 col-sm-6 col-lg-3">
                            <div class="icrest-input">
                                <label>Email</label>
                                <input type="text" placeholder="Email" value="xdodiya@gmail.com" disabled>
                            </div>
                        </div>   
                        <div class="col-12 col-sm-6 col-lg-3">
                            <div class="icrest-input">
                                <label>Mobile</label>
                                <input type="text" placeholder="Mobile" value="+91 9179535577" disabled>
                            </div>
                        </div>   
                        <div class="col-12 col-sm-6 col-lg-3">
                            <div class="icrest-input">
                                <label>Country</label>                                
                                <select disabled>
                                    <option>Select</option>
                                    <option value="India" selected>India</option>
                                </select>
                            </div>
                        </div>     
                        <div class="col-12 col-sm-6 col-lg-3">
                            <div class="icrest-input">
                                <label>City</label>
                                <input type="text" placeholder="City" value="Indore" disabled>
                            </div>
                        </div>                                             
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <a href="#" class="btn-icrest toggle-disable">Edit Details</a>                            
                        </div> 
                    </div>
                    <div class="user-divider"></div>
                    <div class="user-title">
                        Password Details
                    </div>
                    <div class="row collapse" id="passwordPanel">
                        <div class="col-12 col-sm-6 col-lg-3">
                            <div class="icrest-input">
                                <label>Current Password</label>
                                <input type="text" placeholder="Current Passord" value="">
                            </div>                            
                        </div>  
                        <div class="col-12 col-sm-6 col-lg-3">
                            <div class="icrest-input">
                                <label>New Password</label>
                                <input type="text" placeholder="New Passord" value="">
                            </div>                            
                        </div>   
                        <div class="col-12 col-sm-6 col-lg-3">
                            <div class="icrest-input">
                                <label>Confirm New Password</label>
                                <input type="text" placeholder="Confirm Passord" value="">
                            </div>                            
                        </div>                                             
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <a href="#" class="btn-icrest btn-change-password" >Change Password</a>                            
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include 'include/template_footer.php'; ?>
<script>
$(function(){
    var toggled = 0;
    var passtoggle = 0;
    $('.toggle-disable').click(function(){
        if(toggled==0) {
            $(this).text('Save Changes');
            $('[disabled]').prop('disabled', false);       
            toggled = 1;
        } else {
            Swal.fire({                 
                type: 'success',
                title: 'Details Updated Successfully!',                
            }).then((result) => {
                $(this).text('Edit Details');
                $('.personal-inputs .icrest-input input,.personal-inputs .icrest-input select').prop('disabled', true);       
                toggled = 0;
            })            
        }   
    });
    $('.btn-change-password').click(function(){
        if(passtoggle==0) {
            $('#passwordPanel').collapse('show');
            $(this).text('Update Password');
            passtoggle = 1;
        } else {            
            $(this).text('Change Password');
            passtoggle = 0;
            Swal.fire({                 
                type: 'success',
                title: 'Passwrod Changed Successfully!',                
            }).then((result) => {
                $('#passwordPanel').collapse('hide');
            })
        }
    })

})
</script>
