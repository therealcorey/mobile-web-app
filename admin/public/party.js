var par = {
  list : function () {
  // list() : show all the users

    adm.load({
      url : "ajax-party.php",
      target : "container",
      data : {
        req : "list"
      }
    });
  },

  addEdit : function (id) {
  // addEdit() : show add/edit user docket
  // PARAM id : user ID

    adm.load({
      url : "ajax-party.php",
      target : "container",
      data : {
        req : "addEdit",
        id : id
      }
    });
  },

  save : function () {
  // save() : save user

    var id = document.getElementById("party_id").value;
    adm.ajax({
      url : "ajax-party.php",
      data : {
        req : (id=="" ? "add" : "edit"),
        id : id,
        party_name : document.getElementById("par_name").value,
        ideology : document.getElementById("par_ideology").value,
		abbreviation : document.getElementById("par_abbreviation").value,
        chairperson_first_name : document.getElementById("par_chairperson_first_name").value,
		chairperson_last_name : document.getElementById("par_chairperson_last_name").value,
        
      },
      ok : par.list
    });
    return false;
  },

  del : function (id) {
  // del() : delete user
  // PARAM id : user ID

    if (confirm("Delete user?")) {
      adm.ajax({
        url : "ajax-party.php",
        data : {
          req : "del",
          id : id
        },
        ok : par.list
      });
    }
  }
};

window.addEventListener("load", par.list);