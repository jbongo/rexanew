@if (session('ok'))
       
<div class="alert alert-success alert-dismissible fade in">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <a href="#" class="alert-link"><strong> {{ session('ok') }}</strong></a> 
</div>
@endif  

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="row">
   <div class="col-lg-12">
      <div class="card">
         <div class="card-body">
            
            <div class="form-validation">
            <form class="form-valide2 form-horizontal" id="" action="{{route('save_complete_infos')}}" enctype="multipart/form-data" method="post">
                
                  <!-- fieldsets -->
                  @csrf
                  <fieldset>
                     <div class="row">
                        <div class="col-lg-6">
                           <div class="panel lobipanel-basic panel-default">
                              <div class="panel-heading">
                                 <div class="panel-title">@lang('Informations personnelles')</div>
                              </div>
                              <div class="panel-body">
                                 <div class="form-group">
                                    <label class="col-sm-4 control-label" for="choice-famille">@lang('Civilité')<span class="text-danger">*</span></label>
                                    <div class="col-sm-4">
                                       <select class="js-select2 form-control" id="choice-marital" name="civilite" style="width: 100%;" data-placeholder="Choose one.." required>
                                        @if($user->civilite)
                                        <option value="{{$user->civilite}}" > {{$user->civilite}} </option>
                                        @else
                                        <option value ="{{old('civilite')}}" >{{old('civilite')}}</option>
                                        @endif
                                          <option value="M.">M.</option>
                                          <option value="Mme.">Mme.</option>
                                          <option value="Mlle.">Mlle.</option>
                                          
                                       </select>
                                    </div>
                                    @if($errors->has('civilite'))
                                        <br>
                                        <br><br>
                                            <div class="alert alert-warning">
                                                <strong>{{$errors->first('civilite')}}</strong> 
                                            </div> 
                                        <hr> 
                                     @endif
                                 </div>          
                                                     
                                 <div class="form-group">
                                    <label class="col-sm-4 control-label" for="val-lastname">Nom <span class="text-danger">*</span></label>
                                    <div class="col-sm-6">
                                    <input class="form-control" type="text" value="{{old('nom') ? old('nom') : $user->nom}} " name="nom" required>
                                       
                                    </div>
                                    @if($errors->has('nom'))
                                        <br>
                                        <br><br>
                                            <div class="alert alert-warning">
                                                <strong>{{$errors->first('nom')}}</strong> 
                                            </div> 
                                        <hr> 
                                     @endif
                                 </div>
                                 <div class="form-group">
                                    <label class="col-sm-4 control-label" for="val-lastname">Prénom <span class="text-danger">*</span></label>
                                    <div class="col-sm-6">
                                    <input class="form-control" type="text" value="{{old('prenom') ? old('nom') : $user->prenom}} " name="prenom" required>
                                       
                                    </div>
                                    @if($errors->has('prenom'))
                                        <br>
                                        <br><br>
                                            <div class="alert alert-warning">
                                                <strong>{{$errors->first('prenom')}}</strong> 
                                            </div> 
                                        <hr> 
                                     @endif
                                 </div>
                                 <div class="form-group">
                                    <label class="col-sm-4 control-label" for="birth-country">Pays d'origine<span class="text-danger">*</span></label>
                                    <div class="col-sm-6">
                                       <input class="form-control" id="birth-country" name="pays_origine" value="{{old('pays_origine') ? old('pays_origine') : $user->pays}}"  type="text" placeholder="Ex: France..." required>
                                    </div>
                                    @if($errors->has('pays_origine'))
                                        <br>
                                        <br><br>
                                            <div class="alert alert-warning">
                                                <strong>{{$errors->first('pays_origine')}}</strong> 
                                            </div> 
                                        <hr> 
                                     @endif
                                 </div>

                                 <div class="form-group">
                                    <label class="col-sm-4 control-label" for="nationality-country">Téléphone<span class="text-danger">*</span></label>
                                    <div class="col-sm-6">
                                       <input class="form-control" id="nationality-country" name="telephone" value="{{old('telephone') ? old('telephone') : $user->phone}}" type="text"  required>
                                       
                                    </div>
                                    @if($errors->has('telephone'))
                                        <br>
                                        <br><br>
                                            <div class="alert alert-warning">
                                                <strong>{{$errors->first('telephone')}}</strong> 
                                            </div> 
                                        <hr> 
                                     @endif
                                 </div>

                                

                                 <div class="form-group">
                                    <label class="col-sm-4 control-label" for="birthday-town">Adresse</label>
                                    <div class="col-sm-6">
                                       <input class="form-control" name="adresse" value="{{old('adresse') ? old('adresse') : $user->adresse}}"  id="birthday-town" type="text">
                                    </div>
                                    @if($errors->has('adresse'))
                                        <br>
                                        <br><br>
                                            <div class="alert alert-warning">
                                                <strong>{{$errors->first('adresse')}}</strong> 
                                            </div> 
                                        <hr> 
                                     @endif
                                 </div>
                                 <div class="form-group">
                                    <label class="col-sm-4 control-label" for="code_postal">Code postal</label>
                                    <div class="col-sm-6">
                                       <input class="form-control" name="code_postal" value="{{old('code_postal') ? old('code_postal') : $user->code_postal}}"  id="code_postal" type="text">
                                    </div>
                                    @if($errors->has('code_postal'))
                                        <br>
                                        <br><br>
                                            <div class="alert alert-warning">
                                                <strong>{{$errors->first('code_postal')}}</strong> 
                                            </div> 
                                        <hr> 
                                     @endif
                                 </div>
                                 <div class="form-group">
                                    <label class="col-sm-4 control-label" for="ville">Ville</label>
                                    <div class="col-sm-6">
                                       <input class="form-control" name="ville" value="{{old('ville') ? old('ville') : $user->ville}}"  id="ville" type="text" placeholder="Ex: Paris..." >
                                    </div>
                                    @if($errors->has('ville'))
                                        <br>
                                        <br><br>
                                            <div class="alert alert-warning">
                                                <strong>{{$errors->first('ville')}}</strong> 
                                            </div> 
                                        <hr> 
                                     @endif
                                 </div>
                                 



                                 <div class="form-group">
                                    <label class="col-sm-4 control-label" for="birthday-date">Date de naissance</label>
                                    <div class="col-sm-6">
                                       <input class="form-control" id="birthday-date" value="{{old('date_naissance') ? old('date_naissance') : $user->date_naissance}}" name="date_naissance" type="date" >
                                    </div>
                                    @if($errors->has('date_naissance'))
                                        <br>
                                        <br><br>
                                            <div class="alert alert-warning">
                                                <strong>{{$errors->first('date_naissance')}}</strong> 
                                            </div> 
                                        <hr> 
                                     @endif
                                 </div>
                                 
                               
                              </div>
                           </div>
                        </div>
                        <!-- /# column -->
                        <div class="col-lg-6">
                           <div class="panel lobipanel-basic panel-pink">
                              <div class="panel-heading">
                                 <div class="panel-title">Autres informations</div>
                              </div>
                              <div class="panel-body">
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="choice-famille">@lang('Secteur d\'activité')<span class="text-danger">*</span></label>
                                    <div class="col-sm-4">
                                       <select class="js-select2 form-control" id="choice-marital" name="secteur" style="width: 100%;"  required>
                                        @if($user->secteur_activite)
                                        <option value="{{$user->secteur_activite}}" > {{$user->secteur_activite}} </option>
                                        @else
                                        <option value ="{{old('secteur')}}" >{{old('secteur')}}</option>
                                        @endif
                                          <option value="Informatique">Informatique</option>
                                          <option value="Economie">Economie</option>
                                          <option value="Finance">Finance</option>
                                          <option value="Autre">Autre</option>
                                          
                                       </select>
                                    </div>
                                    @if($errors->has('secteur'))
                                        <br>
                                        <br><br>
                                            <div class="alert alert-warning">
                                                <strong>{{$errors->first('secteur')}}</strong> 
                                            </div> 
                                        <hr> 
                                     @endif
                                 </div>    
                                 
                                 <div class="form-group">
                                    <label class="col-sm-4 control-label" for="nationality-country">Poste</label>
                                    <div class="col-sm-6">
                                       <input class="form-control" id="nationality-country" name="poste" value="{{old('poste') ? old('poste') : $user->poste}}" type="text"  >
                                       
                                    </div>
                                    @if($errors->has('poste'))
                                        <br>
                                        <br><br>
                                            <div class="alert alert-warning">
                                                <strong>{{$errors->first('poste')}}</strong> 
                                            </div> 
                                        <hr> 
                                     @endif
                                 </div>

                                 <div class="form-group">
                                    <div class="user-photo m-b-30">
                                        <img class="img-responsive" id="photodisplay" width=" 195px" height="500px" src="{{asset('/img/photo_profile/'.(($user->photo) ? $user->photo : "user.png"))}}" alt="@lang('Photo de profil')">
                                        
                                        <div class="user-send-message"><button class="btn btn-success btn-addon" type="button" id="modifPhoto"><i class="ti-plus"></i>@lang('Modifier la photo de profil')</button></div>
                                        
                                    </div>
                                    <input class="form-control" id="photobtn" type="hidden" name="photo">
                                 </div>

                                 
                              </div>
                           </div>
                        </div>
                        <!-- /# column -->
                     </div>
                    </fieldset>
                    <button class="btn btn-dark btn-flat btn-addon m-b-10 m-l-5" type="submit"><i class="ti-save"></i>@lang('Enregistrer')</button>

               </form>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection
@section('js-content')

<script>


function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#photodisplay').fadeOut();
                $('#photodisplay').attr('src', e.target.result);
                $('#photodisplay').fadeIn(1000);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

$('#modifPhoto').click(function(){
$('#modifPhoto').fadeOut(1000);
$("#photobtn").attr('type','file');

});
    $("#photobtn").change(function () {
        readURL(this);
        
    });


</script>

<!--country-->
<script>
   function autocomplete(inp, arr) {
     /*the autocomplete function takes two arguments,
     the text field element and an array of possible autocompleted values:*/
     var currentFocus;
     /*execute a function when someone writes in the text field:*/
     inp.addEventListener("input", function(e) {
         var a, b, i, val = this.value;
         /*close any already open lists of autocompleted values*/
         closeAllLists();
         if (!val) { return false;}
         currentFocus = -1;
         /*create a DIV element that will contain the items (values):*/
         a = document.createElement("DIV");
         a.setAttribute("id", this.id + "autocomplete-list");
         a.setAttribute("class", "autocomplete-items");
         /*append the DIV element as a child of the autocomplete container:*/
         this.parentNode.appendChild(a);
         /*for each item in the array...*/
         for (i = 0; i < arr.length; i++) {
           /*check if the item starts with the same letters as the text field value:*/
           if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
             /*create a DIV element for each matching element:*/
             b = document.createElement("DIV");
             /*make the matching letters bold:*/
             b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
             b.innerHTML += arr[i].substr(val.length);
             /*insert a input field that will hold the current array item's value:*/
             b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
             /*execute a function when someone clicks on the item value (DIV element):*/
             b.addEventListener("click", function(e) {
                 /*insert the value for the autocomplete text field:*/
                 inp.value = this.getElementsByTagName("input")[0].value;
                 /*close the list of autocompleted values,
                 (or any other open lists of autocompleted values:*/
                 closeAllLists();
             });
             a.appendChild(b);
           }
         }
     });
     /*execute a function presses a key on the keyboard:*/
     inp.addEventListener("keydown", function(e) {
         var x = document.getElementById(this.id + "autocomplete-list");
         if (x) x = x.getElementsByTagName("div");
         if (e.keyCode == 40) {
           /*If the arrow DOWN key is pressed,
           increase the currentFocus variable:*/
           currentFocus++;
           /*and and make the current item more visible:*/
           addActive(x);
         } else if (e.keyCode == 38) { //up
           /*If the arrow UP key is pressed,
           decrease the currentFocus variable:*/
           currentFocus--;
           /*and and make the current item more visible:*/
           addActive(x);
         } else if (e.keyCode == 13) {
           /*If the ENTER key is pressed, prevent the form from being submitted,*/
           e.preventDefault();
           if (currentFocus > -1) {
             /*and simulate a click on the "active" item:*/
             if (x) x[currentFocus].click();
           }
         }
     });
     function addActive(x) {
       /*a function to classify an item as "active":*/
       if (!x) return false;
       /*start by removing the "active" class on all items:*/
       removeActive(x);
       if (currentFocus >= x.length) currentFocus = 0;
       if (currentFocus < 0) currentFocus = (x.length - 1);
       /*add class "autocomplete-active":*/
       x[currentFocus].classList.add("autocomplete-active");
     }
     function removeActive(x) {
       /*a function to remove the "active" class from all autocomplete items:*/
       for (var i = 0; i < x.length; i++) {
         x[i].classList.remove("autocomplete-active");
       }
     }
     function closeAllLists(elmnt) {
       /*close all autocomplete lists in the document,
       except the one passed as an argument:*/
       var x = document.getElementsByClassName("autocomplete-items");
       for (var i = 0; i < x.length; i++) {
         if (elmnt != x[i] && elmnt != inp) {
           x[i].parentNode.removeChild(x[i]);
         }
       }
     }
     /*execute a function when someone clicks in the document:*/
     document.addEventListener("click", function (e) {
         closeAllLists(e.target);
         });
   }
   
   /*An array containing all the country names in the world:*/
   var countries = ["Afghanistan","Albania","Algeria","Andorra","Angola","Anguilla","Antigua & Barbuda","Argentina","Armenia","Aruba","Australia","Austria","Azerbaijan","Bahamas","Bahrain","Bangladesh","Barbados","Belarus","Belgium","Belize","Benin","Bermuda","Bhutan","Bolivia","Bosnia & Herzegovina","Botswana","Brazil","British Virgin Islands","Brunei","Bulgaria","Burkina Faso","Burundi","Cambodia","Cameroon","Canada","Cape Verde","Cayman Islands","Central Arfrican Republic","Chad","Chile","China","Colombia","Congo","Cook Islands","Costa Rica","Cote D Ivoire","Croatia","Cuba","Curacao","Cyprus","Czech Republic","Denmark","Djibouti","Dominica","Dominican Republic","Ecuador","Egypt","El Salvador","Equatorial Guinea","Eritrea","Estonia","Ethiopia","Falkland Islands","Faroe Islands","Fiji","Finland","France","French Polynesia","French West Indies","Gabon","Gambia","Georgia","Germany","Ghana","Gibraltar","Greece","Greenland","Grenada","Guam","Guatemala","Guernsey","Guinea","Guinea Bissau","Guyana","Haiti","Honduras","Hong Kong","Hungary","Iceland","India","Indonesia","Iran","Iraq","Ireland","Isle of Man","Israel","Italy","Jamaica","Japan","Jersey","Jordan","Kazakhstan","Kenya","Kiribati","Kosovo","Kuwait","Kyrgyzstan","Laos","Latvia","Lebanon","Lesotho","Liberia","Libya","Liechtenstein","Lithuania","Luxembourg","Macau","Macedonia","Madagascar","Malawi","Malaysia","Maldives","Mali","Malta","Marshall Islands","Mauritania","Mauritius","Mexico","Micronesia","Moldova","Monaco","Mongolia","Montenegro","Montserrat","Morocco","Mozambique","Myanmar","Namibia","Nauro","Nepal","Netherlands","Netherlands Antilles","New Caledonia","New Zealand","Nicaragua","Niger","Nigeria","North Korea","Norway","Oman","Pakistan","Palau","Palestine","Panama","Papua New Guinea","Paraguay","Peru","Philippines","Poland","Portugal","Puerto Rico","Qatar","Reunion","Romania","Russia","Rwanda","Saint Pierre & Miquelon","Samoa","San Marino","Sao Tome and Principe","Saudi Arabia","Senegal","Serbia","Seychelles","Sierra Leone","Singapore","Slovakia","Slovenia","Solomon Islands","Somalia","South Africa","South Korea","South Sudan","Spain","Sri Lanka","St Kitts & Nevis","St Lucia","St Vincent","Sudan","Suriname","Swaziland","Sweden","Switzerland","Syria","Taiwan","Tajikistan","Tanzania","Thailand","Timor L'Este","Togo","Tonga","Trinidad & Tobago","Tunisia","Turkey","Turkmenistan","Turks & Caicos","Tuvalu","Uganda","Ukraine","United Arab Emirates","United Kingdom","United States of America","Uruguay","Uzbekistan","Vanuatu","Vatican City","Venezuela","Vietnam","Virgin Islands (US)","Yemen","Zambia","Zimbabwe"];
   
   /*initiate the autocomplete function on the "myInput" element, and pass along the countries array as possible autocomplete values:*/
   autocomplete(document.getElementById("birth-country"), countries);
   autocomplete(document.getElementById("nationality-country"), countries);
</script>
<!--country-->

<script>
   
   		
       

</script>
@endsection