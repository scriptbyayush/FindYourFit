function openTab(evt, tabName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    tablinks = document.getElementsByClassName("tab");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    document.getElementById(tabName).style.display = "block";
    evt.currentTarget.className += " active";
}

var alliedBranchesOptions = {
    "Computer Science and Engineering": ["Information Technology","Artificial Intelligence", "Data Science", "Machine Learning"],
    "Mechanical Engineering": ["Chemical Engineering", "Aeronautical Engineering", "Petrochemical Engineering","Paper & Pulp Engineering"],
    "Civil Engineering": [""],
    "Electrical Engineering": ["Electronics Engineering", "Electronics and Communication Engineering"],
    "Food Technology": [""]
  };
  // Define a function that updates the allied branches menu based on the core branches value
  function updateAlliedBranches() {
    // Get the value of the core branches menu and the allied branches menu elements
    var coreBranch = document.getElementById("coreBranches").value;
    var alliedBranch = document.getElementById("alliedBranches");
  
    // Clear the existing options of the allied branches menu
    alliedBranch.innerHTML = "";
  
    // Create a default option
    var defaultOption = document.createElement("option");
    defaultOption.value = "";
    defaultOption.text = "Select Allied Branches";
    alliedBranch.appendChild(defaultOption);
  
    // Check if the core branches value is not empty
    if (coreBranch) {
      // Get the options for the selected core branch from the object
      var options = alliedBranchesOptions[coreBranch];
  
      // Loop through the options and create new option elements
      for (var i = 0; i < options.length; i++) {
        var option = document.createElement("option");
        option.value = options[i];
        option.text = options[i];
        alliedBranch.appendChild(option);
      }
    }
  }
  function changeAll(){
   coreValue = document.getElementById('core').value;
   with(document.forms.form100){
   if(coreValue=="Computer Science and Engineering"){
    allied[1].text="Information Technology";
    allied[1].value="Information Technology";
    allied[2].text="Artificial Intelligence";
    allied[2].value="Artificial Intelligence";
    allied[3].text="Data Science";
    allied[3].value="Data Science";
    allied[4].text="Machine Learning";
    allied[4].value="Machine Learning";
}
else if(coreValue=="Mechanical Engineering"){
    allied[1].text="Chemical Engineering";
    allied[1].value="Chemical Engineering";
    allied[2].text="Aeronautical Engineering";
    allied[2].value="Aeronautical Engineering";
    allied[3].text="Petrochemical Engineering";
    allied[3].value="Petrochemical Engineering";
    allied[4].text="Paper & Pulp Engineering";
    allied[4].value="Paper & Pulp Engineering";
}
else if(coreValue=="Civil Engineering"){
    allied[1].text="";
    allied[1].value="";
    allied[2].text="";
    allied[2].value="";
    allied[3].text="";
    allied[3].value="";
    allied[4].text="";
    allied[4].value="";
}
else if(coreValue=="Electrical Engineering"){
    allied[1].text="Electronics Engineering";
    allied[1].value="Electronics Engineering";
    allied[2].text="Electronics and Communication Engineering";
    allied[2].value="Electronics and Communication Engineering";
    allied[3].text="";
    allied[3].value="";
    allied[4].text="";
    allied[4].value="";
}
else if(coreValue=="Food Technology"){
    allied[1].text="";
    allied[1].value="";
    allied[2].text="";
    allied[2].value="";
    allied[3].text="";
    allied[3].value="";
    allied[4].text="";
    allied[4].value="";
}

   }
  }

  function changeAll2(){
    coreValue = document.getElementById('coreBranches').value;
    with(document.forms.myForm){
     if(coreValue=="Computer Science and Engineering"){
    alliedBranches[1].text="Information Technology";
    alliedBranches[1].value="Information Technology";
    alliedBranches[2].text="Artificial Intelligence";
    alliedBranches[2].value="Artificial Intelligence";
    alliedBranches[3].text="Data Science";
    alliedBranches[3].value="Data Science";
    alliedBranches[4].text="Machine Learning";
    alliedBranches[4].value="Machine Learning";
}
else if(coreValue=="Mechanical Engineering"){
    alliedBranches[1].text="Chemical Engineering";
    alliedBranches[1].value="Chemical Engineering";
    alliedBranches[2].text="Aeronautical Engineering";
    alliedBranches[2].value="Aeronautical Engineering";
    alliedBranches[3].text="Petrochemical Engineering";
    alliedBranches[3].value="Petrochemical Engineering";
    alliedBranches[4].text="Paper & Pulp Engineering";
    alliedBranches[4].value="Paper & Pulp Engineering";
}
else if(coreValue=="Civil Engineering"){
    alliedBranches[1].text="";
    alliedBranches[1].value="";
    alliedBranches[2].text="";
    alliedBranches[2].value="";
    alliedBranches[3].text="";
    alliedBranches[3].value="";
    alliedBranches[4].text="";
    alliedBranches[4].value="";
}
else if(coreValue=="Electrical Engineering"){
    alliedBranches[1].text="Electronics Engineering";
    alliedBranches[1].value="Electronics Engineering";
    alliedBranches[2].text="Electronics and Communication Engineering";
    alliedBranches[2].value="Electronics and Communication Engineering";
    alliedBranches[3].text="";
    alliedBranches[3].value="";
    alliedBranches[4].text="";
    alliedBranches[4].value="";
}
else if(coreValue=="Food Technology"){
    alliedBranches[1].text="";
    alliedBranches[1].value="";
    alliedBranches[2].text="";
    alliedBranches[2].value="";
    alliedBranches[3].text="";
    alliedBranches[3].value="";
    alliedBranches[4].text="";
    alliedBranches[4].value="";
}
}
   }