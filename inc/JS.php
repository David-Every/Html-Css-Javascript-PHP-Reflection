<script type = "text/javascript">
   function noName(){
        var alerts = document.getElementById("alerts");
        let div = document.createElement('div');
        div.classList.add('alert');
        div.classList.add('failedSub');
        div.innerHTML = 'The name field is required. <i class="cross fas fa-times"></i>';
        alerts.appendChild(div);
   }

   function noEmail(){
        var alerts = document.getElementById("alerts");
        let div = document.createElement('div');
        div.classList.add('alert');
        div.classList.add('failedSub');
        div.innerHTML = 'The email field is required. <i class="cross fas fa-times"></i>';
        alerts.appendChild(div);
   }

   function noMarketing(){
        var alerts = document.getElementById("alerts");
        let div = document.createElement('div');
        div.classList.add('alert');
        div.classList.add('failedSub');
        div.innerHTML = 'The marketing preference field is required. <i class="cross fas fa-times"></i> </div>';
        alerts.appendChild(div);
   }

   function alreadySub(){
        var alerts = document.getElementById("alerts");
        let div = document.createElement('div');
        div.classList.add('alert');
        div.classList.add('failedSub');
        div.innerHTML = 'Please wait until submitting the form again. <i class="cross fas fa-times"></i> </div>';
        alerts.appendChild(div);
   }

   function successfulSub(){
        var alerts = document.getElementById("alerts");
        let div = document.createElement('div');
        div.classList.add('alert');
        div.classList.add('completedSub');
        div.innerHTML = 'You have successfully joined our mailing list. <i class="cross fas fa-times"></i> </div>';
        alerts.appendChild(div);
   }
</script>