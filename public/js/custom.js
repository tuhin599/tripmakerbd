$('#userType').on('change',function (e) {

    v=$(e.target).val();
    if(v=='Manager'){
   $('#addElement').html(function () {
       return `<div class="form-group has-feedback">
                    <input type="text" name="hotel_name" class="form-control" placeholder="Hotel Name">
                    <span class="glyphicon glyphicon-tower form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="text" name="location" class="form-control" placeholder="Location">
                    <span class="glyphicon glyphicon-yen form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <select name="class" class="form-control">
                    <option value="null"> Select the class</option>
                    <option value="1">1 Star</option>
                    <option value="2">2 Star</option>
                    <option value="3">3 Star</option>
                    <option value="4">4 Star</option>
                    <option value="5">5 Star</option>
                </select>
                </div>`;
   });}
   else {
        $('#addElement').html(" ");
    }
});