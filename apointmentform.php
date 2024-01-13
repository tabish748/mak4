<?php include 'incl/header.php'; ?>
<style>
    <?php include 'assets/css/pages/apointmentform.css';
    ?>
</style>

<div class="apt-form-section">
<div class="inner-container">
<h1 class="heading-page">Appointment Form</h1>


<form action="">
    <div class="row">
        <div class="col-md-6">
            <div class="field-wrapper">
                <label for="">First Name</label>
                <input type="text" placeholder="First Name">
            </div>
        </div>
        <!-- col 6 -->
        <div class="col-md-6">
            <div class="field-wrapper">
                <label for="">Last Name</label>
                <input type="text" placeholder="Last Name">
            </div>
        </div>
        <!-- col 6 -->
        <div class="col-md-6">
            <div class="field-wrapper">
                <label for="">Email</label>
                <input type="email" placeholder="Your Email Address..">
            </div>
        </div>
        <!-- col 6 -->

        <div class="col-md-6">
            <div class="field-wrapper">
                <label for="">Contact No</label>
                <input type="number" placeholder="Contact No">
            </div>
        </div>
        <!-- col 6 -->

        <div class="col-md-6">
            <div class="field-wrapper">
                <label for="">Appointment Location</label>
                <input type="text" placeholder="Your Location Here..">
            </div>
        </div>
        <!-- col 6 -->

        <div class="col-md-6">
            <div class="field-wrapper">
                <label for="">Select Date</label>
                <input type="date" placeholder="">
            </div>
        </div>
        <!-- col 6 -->
    </div>
    <!-- row -->
    <div class="row">
        <div class="col-md-12">
                <div class="slot-wrapper">
                    <p>select slot</p>
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <button class="nav-link active" id="nav-home-tab " data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true"><p id="slot">10 AM | 11 AM</p></button>
                            <!-- <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Profile</button>
                            <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Contact</button> -->
                        </div>
                    </nav>
                        <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                            <div class="slot-time-area">
                                <div class="days-strip-wrapper">

                                <label for="Monday">Monday</label>
                            <input type="button" value="7.AM | 8.AM" name="Monday: "   onclick="timeslot(this.name,this.value);">
                            <input type="button" value="8.AM | 9 AM"  name="Monday: "  onclick="timeslot(this.name,this.value);">
                            <input type="button" value="9.AM | 10 AM" name="Monday: "   onclick="timeslot(this.name,this.value);">
                            <input type="button" value="10.AM | 11 AM"  name="Monday: "  onclick="timeslot(this.name,this.value);">
                            <input type="button" value="11.AM | 12 AM" name="Monday: "  onclick="timeslot(this.name,this.value);">





                                </div>
                                <!-- days-strip-wrapper -->


                                <div class="days-strip-wrapper">
                                <label for="Tuesday">Tuesday</label>
                            <input type="button" value="7.AM | 8.AM" name="Tuesday: "   onclick="timeslot(this.name,this.value);">
                            <input type="button" value="8.AM | 9 AM"  name="Tuesday: "  onclick="timeslot(this.name,this.value);">
                            <input type="button" value="9.AM | 10 AM" name="Tuesday: "   onclick="timeslot(this.name,this.value);">
                            <input type="button" value="10.AM | 11 AM"  name="Tuesday: "  onclick="timeslot(this.name,this.value);">
                            <input type="button" value="11.AM | 12 AM" name="Tuesday: "  onclick="timeslot(this.name,this.value);">
</div>
<!-- days-strip-wrapper -->



<div class="days-strip-wrapper">

<label for="Wednesday">Wednesday</label>
                            <input type="button" value="7.AM | 8.AM" name="Wednesday: "   onclick="timeslot(this.name,this.value);">
                            <input type="button" value="8.AM | 9 AM"  name="Wednesday: "  onclick="timeslot(this.name,this.value);">
                            <input type="button" value="9.AM | 10 AM" name="Wednesday: "   onclick="timeslot(this.name,this.value);">
                            <input type="button" value="10.AM | 11 AM"  name="Wednesday: "  onclick="timeslot(this.name,this.value);">
                            <input type="button" value="11.AM | 12 AM" name="Wednesday: "  onclick="timeslot(this.name,this.value);">
</div>
<!-- days-strip-wrapper -->



<div class="days-strip-wrapper">

<label for="Thursday">Thursday</label>
                            <input type="button" value="7.AM | 8.AM" name="Thursday: "   onclick="timeslot(this.name,this.value);">
                            <input type="button" value="8.AM | 9 AM"  name="Thursday: "  onclick="timeslot(this.name,this.value);">
                            <input type="button" value="9.AM | 10 AM" name="Thursday: "   onclick="timeslot(this.name,this.value);">
                            <input type="button" value="10.AM | 11 AM"  name="Thursday: "  onclick="timeslot(this.name,this.value);">
                            <input type="button" value="11.AM | 12 AM" name="Thursday: "  onclick="timeslot(this.name,this.value);">
</div>
<!-- days-strip-wrapper -->



<div class="days-strip-wrapper">
<label for="friday">Friday</label>
                            <input type="button" value="7.AM | 8.AM" name="friday: "   onclick="timeslot(this.name,this.value);">
                            <input type="button" value="8.AM | 9 AM"  name="friday: "  onclick="timeslot(this.name,this.value);">
                            <input type="button" value="9.AM | 10 AM" name="friday: "   onclick="timeslot(this.name,this.value);">
                            <input type="button" value="10.AM | 11 AM"  name="friday: "  onclick="timeslot(this.name,this.value);">
                            <input type="button" value="11.AM | 12 AM" name="friday: "  onclick="timeslot(this.name,this.value);">
</div>
<!-- days-strip-wrapper -->



<div class="days-strip-wrapper">
<label for="saturday">Saturday</label>
                            <input type="button" value="7.AM | 8.AM" name="Saturday: "   onclick="timeslot(this.name,this.value);">
                            <input type="button" value="8.AM | 9 AM"  name="Saturday: "  onclick="timeslot(this.name,this.value);">
                            <input type="button" value="9.AM | 10 AM" name="Saturday: "   onclick="timeslot(this.name,this.value);">
                            <input type="button" value="10.AM | 11 AM"  name="Saturday: "  onclick="timeslot(this.name,this.value);">
                            <input type="button" value="11.AM | 12 AM" name="Saturday: "  onclick="timeslot(this.name,this.value);">
</div>
<!-- days-strip-wrapper -->



<div class="days-strip-wrapper">
<label for="sunday">Sunday</label>
                            <input type="button" value="7.AM | 8.AM" name="sunday: " onclick="timeslot(this.name,this.value);">
                            <input type="button" value="8.AM | 9 AM"  name=" sunday: "  onclick="timeslot(this.name,this.value);">
                            <input type="button" value="9.AM | 10 AM"  name=" sunday: "   onclick="timeslot(this.name,this.value);">
                            <input type="button" value="10.AM | 11 AM"  name=" sunday: "  onclick="timeslot(this.name,this.value);">
                            <input type="button" value="11.AM | 12 AM"  name=" sunday: "  onclick="timeslot(this.name,this.value);">
</div>
<!-- days-strip-wrapper -->

                            </div>
                            <!-- slot-time-area -->
                        </div>
                        <!-- <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">...</div>
                        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">...</div> -->
                        </div>
                </div>
                <!-- slot-wrapper -->
        </div>
        <!-- col12 -->
    </div>
    <!-- row -->
    <div class="row">
        <div class="col-md-12">
            <label for="">Message</label>
            <br>
            <textarea name="" id="" cols="30" rows="6" placeholder="Type Your Message Here..."></textarea>

            <input type="submit" value="Submit" class="submit-btn">
        </div>
    </div>
</form>




</div>
<!-- inner-container -->
</div>
<!-- apt-form-section -->

<script>

    function timeslot(val,day)
    {
       document.getElementById("slot").innerHTML=val + day;
    }
</script>
<?php include 'incl/footer.php'; ?>