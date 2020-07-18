var valid = true;


function eMsg(message) {
    alert('Error: L' + message + '+');
} //end eMsg

//laundry type
$('#newType').click(function(event) {
    /* Act on the event */
    $('#type-type').val('insert');
    $('#type').val('');
    $('#price').val('');
    $('#modal-lau-type').find('.modal-title').text('Créer un nouveau type de document');
    $('#modal-lau-type').modal('show');
});

//inset new type
$(document).on('submit', '#form-type', function(event) {
    event.preventDefault();
    /* Act on the event */
    var type_id = $('#type-id').val();
    var type = $('#type').val();
    var type_type = $('#type-type').val();
    
    if (type_type == 'insert') {
        $.ajax({
            url: 'data/insert_type.php',
            type: 'post',
            dataType: 'json',
            data: {
                type: type
            },
            success: function(data) {
                // console.log(data);
                if (data.valid == valid) {
                    $('#modal-lau-type').modal('hide');
                    all_type();
                    $('#type').val('');
                    $('#modal-msg').find('#msg-body').text(data.msg);
                    $('#modal-msg').modal('show');
                }
            },
            error: function() {
                eMsg(26);
            }
        });
    } else if (type_type == 'edit') {
        $.ajax({
            url: 'data/edit_type.php',
            type: 'post',
            dataType: 'json',
            data: {
                type_id: type_id,
                type: type
            },
            success: function(data) {
                // console.log(data);
                if (data.valid == valid) {
                    all_type();
                    $('#modal-lau-type').modal('hide');
                    $('#modal-msg').find('#msg-body').text(data.msg);
                    $('#modal-msg').modal('show');
                }
            },
            error: function() {
                eMsg(58);
            }
        });
    } else {
        //where magic begins .wahaha
    }
});

//display type table
function all_type() {
    $.ajax({
        url: 'data/all_types.php',
        type: 'post',
        success: function(data) {
            $('#table-type').html(data);
        },
        error: function() {
            eMsg(45);
        }
    });
} //end all_type
all_type();

//edit type
function editType(type_id) {
    $.ajax({
        url: 'data/get_type.php',
        type: 'post',
        dataType: 'json',
        data: {
            type_id: type_id
        },
        success: function(data) {
            // console.log(data);
            $('#type-type').val('edit');
            $('#type-id').val(data.typeID);
            $('#type').val(data.libelle);
            $('#modal-lau-type').find('.modal-title').text('Editer le type de document');
            $('#modal-lau-type').modal('show');
        },
        error: function() {
            eMsg(72);
        }
    });
} //end editType


//all laundry
function all_laundry() {
    $.ajax({
        url: 'data/all_laundry.php',
        type: 'post',
        data: {

        },
        success: function(data) {
            $('#table-laundry').html(data);
        },
        error: function() {
            eMsg(128);
        }
    });
} //end all_laundry
all_laundry();



//open modal
$('#newLaun').click(function(event) {
    /* Act on the event */
    $('#laun-type').val('insert');
    $('#modal-laun').find('.modal-title').text('Nouveau dossier');
    $('#modal-laun').modal('show');


    $('#cni').keyup(function() {
        var field = $(this).val();
        //alert('bonjour');
        // on commence à traiter à partir du 2ème caractère saisie
        if (field.length > 0) {
            // on envoie la valeur recherché en GET au fichier de traitement
            $.ajax({
                type: 'POST', // envoi des données en GET ou POST
                url: 'data/ajax-search.php', // url du fichier de traitement
                data: {
                    q: field
                }, // données à envoyer en  GET ou POST
                dataType: 'json',
                beforeSend: function() { // traitements JS à faire AVANT l'envoi
                    //$field.after('<img src="ajax-loader.gif" alt="loader" id="ajax-loader" />'); // ajout d'un loader pour signifier l'action
                },
                success: function(data) { // traitements JS à faire APRES le retour d'ajax-search.php
                    /*$('#results').html(data); // affichage des résultats dans le bloc
                    console.log(data);*/
                    //console.log(data.error); //data.nom
                    if (data.valid == false) {
                        //alert('bonjour');
                        $('#customer').attr('disabled', false);
                        $('#customer').attr('value', '');
                    } else {
                        $('#customer').attr('value', data.depositaire);
                        $('#customer').attr('disabled', true);
                        //alert(data.depositaire);
                    }
                    //$('#nom').attr('value', 'test');

                }
            });
        }
    });


});

$(document).on('submit', '#form-new-laun', function(event) {
    event.preventDefault();
    /* Act on the event */
    var modal_type = $('#laun-type').val(); //insert/update
    var laun_id = $('#laun-id').val(); //pk

    var docID = $('#docID').val(); //pk
    var customer = $('#customer').val(); //nom
    var priority = $('#priority').val(); //classeur
    var weight = $('#weight').val(); //qte
    var type = $('#newlaun-type').val(); // type de doc
   // alert(docID);
    var cni = $('#cni').val(); // cni

    if (modal_type == 'insert') {
        $.ajax({
            url: 'data/insert_laundry.php',
            type: 'post',
            dataType: 'json',
            data: {
                customer: customer,
                priority: priority,
                weight: weight,
                type: type,
                cni: cni
            },
            success: function(data) {
                // console.log(data);
                //all_laundry();
                /*$('#customer').attr('value', '');
                $('#priority').attr('value', '');
                $('#weight').attr('value', '');
                $('#cni').attr('value', '');*/
                $('#modal-laun').modal('hide');

                $.ajax({
                    url: 'data/create_user.php',
                    type: 'post',
                    dataType: 'json',
                    data: {
                        customer: customer,
                        cni: cni
                    }
                });
                all_laundry();

            },
            error: function(e) {
                eMsg(163);
            }
        });
    } else if (modal_type == 'edit') {
        $.ajax({
            url: 'data/edit_laundry.php',
            type: 'post',
            dataType: 'json',
            data: {
                priority: priority,
                weight: weight,
                type: type,
                docID: docID
            },
            success: function(data) {
                // console.log(data);
                if (data.valid == valid) {
                    all_laundry();
                    $('#modal-laun').modal('hide');
                    $('#modal-msg').find('#msg-body').text(data.msg);
                    $('#modal-msg').modal('show');
                }
            },
            error: function() {
                eMsg(183);
            }
        });
    } else {
        //where the magic begins .mhuahwahwahwah
        //soo sleepy. programmer sucks
    }

}); //end submit form

//delete laundry
$('#delLaun').click(function(event) {
    /* Act on the event */
    var haveCheck = false;
    $('input[type=checkbox]:checked').each(function(index) {
        haveCheck = true;
    });

    if (haveCheck == false) {
        alert('Aucun dossier sélectionné.');
    } else {
        $('#confirm-type').val('delete-laundry');
        $('#modal-confirm').modal('show');

    }
});

$('#retraitDoc').click(function(event) {
    /* Act on the event */
    var haveCheck = false;
    $('input[type=checkbox]:checked').each(function(index) {
        haveCheck = true;
    });

    if (haveCheck == false) {
        alert('Aucun dossier sélectionné.');
    } else {
        $('#confirm-type').val('retire-dossier');
        $('#modal-confirm').modal('show');
        console.log("good");
    }
});

//if confirm button yes is click
$('#confirm-yes').click(function(event) {
    /* Act on the event */
    var confirmType = $('#confirm-type').val();
    if (confirmType == 'delete-laundry') {
        //delete laun
        $('input[type=checkbox]:checked').each(function(index) {
            var id = $(this).val();
            $.ajax({
                url: 'data/delete_laundry.php',
                type: 'post',
                data: {
                    id: id
                },
                success: function(data) {
                    // im soo sleepy
                },
                error: function() {
                    eMsg(211);
                }
            });
        }); //end check array
        $('#modal-confirm').modal('hide');
        $('#modal-msg').find('#msg-body').text('Dossier supprimé avec succès !');
        $('#modal-msg').modal('show');
    } else if (confirmType == 'claim-laundry') {
        $('input[type=checkbox]:checked').each(function(index) {
            var id = $(this).val();
            $.ajax({
                url: 'data/claim_laundry.php',
                type: 'post',
                data: {
                    id: id
                },
                success: function(data) {
                    // soo  sleepy
                },
                error: function() {
                    eMsg(258);
                }
            });
        }); //end check array
        $('#modal-confirm').modal('hide');
        $('#modal-msg').find('#msg-body').text('Dossier marqué comme signé avec succès !');
        $('#modal-msg').modal('show');
    } else if (confirmType == "retire-dossier") {
        $('input[type=checkbox]:checked').each(function(index) {
            var id = $(this).val();
            $.ajax({
                url: 'data/retire_document.php',
                type: 'post',
                data: {
                    id: id
                },
                success: function(data) {
                    loadSale();
                },
                error: function() {
                    eMsg(211);
                }
            });
        }); //end check array
        $('#modal-confirm').modal('hide');
        $('#modal-msg').find('#msg-body').text('Dossier(s) marqué(s) comme retiré(s) avec succès !');
        $('#modal-msg').modal('show');
    } else {
        //sooo fucking sleepy
    }
    all_laundry();
}); //end if confirm yes is click

//edit laundry basin na sayop
function editLaundry(id) {
    $('#laun-type').val('edit');
    //alert(id);
    //fill
    $.ajax({
        url: 'data/get_laundry.php',
        type: 'post',
        dataType: 'json',
        data: {
            id: id
        },
        success: function(data) {

            $('#customer').val(data.depositaire);  //nom
            $('#priority').val(data.classeur);   //classeur
            $('#weight').val(data.qte);      //qte
            $('#newlaun-type').val(data.doc_type);  // type de doc
            $('#cni').val(data.cni); // cni
            $('#docID').val(data.docID); // cni
        },
        error: function() {
            eMsg(237);
        }
    });
    $('#modal-laun').find('.modal-title').text('Editer le dossier');
    $('#cni').attr('disabled', true);
    $('#customer').attr('disabled', true);

    $('#modal-laun').modal('show');

} //end editLaundry

//claim laundry
$('#claim').click(function(event) {
    /* Act on the event */
    var haveCheck = false;
    $('input[type=checkbox]:checked').each(function(index) {
        haveCheck = true;
    });

    if (haveCheck == false) {
        alert('Svp sélectionnez les dossiers au préalable.');
    } else {
        $('#confirm-type').val('claim-laundry');
        $('#modal-confirm').modal('show');
    }
});

//date choice sa report
$('#dailySale').change(function(e) {
    e.preventDefault();
    date = $('#dailySale').val();
    if (date == '' || date == null) {
        $('#printBut').hide();
    } else {
        $('#printBut').show();
    }
    $.ajax({
        url: 'data/daily_report.php',
        type: 'post',
        data: {
            date: date
        },
        success: function(data) {
            $('#table-sales').html(data);
        },
        error: function() {
            eMsg(330);
        }
    });
});

function loadSale() {
    var date = $('#dailySale').val();
    $.ajax({
        url: 'data/daily_report.php',
        type: 'post',
        data: {
            date: date
        },
        success: function(data) {
            $('#table-sales').html(data);
        },
        error: function() {
            eMsg(348);
        }
    });
} //end loadSale
loadSale();

function loadRetire() {
    $.ajax({
        url: 'data/retire_liste.php',
        type: 'post',
        data: {},
        success: function(data) {
            $('#table-retire').html(data);
        },
        error: function() {
            eMsg(348);
        }
    });
} //end loadSale
loadRetire();

$('#print-button').click(function(event) {
    /* Act on the event */
    var date = $('#dailySale').val();
    window.open('data/print.php?date=' + date, 'name', 'width=600,height=400');
});

$('#changePass').click(function(event) {
    /* Act on the event */
    $('#modal-pass').find('.modal-title').text('Modifier mes informations');
    $('#modal-pass').modal('show');
});

$(document).on('submit', '#form-change', function(event) {
    event.preventDefault();
    /* Act on the event */
    var name = $('#name').val();
    var pseudo = $('#pseudo').val();
    var sexe = $('#sexe').val();
    var pwd = $('#pwd').val();
    var pwd2 = $('#pwd2').val();

    if (pwd != pwd2) {
        alert("Password Not Match!");
    } else {
        //pass is match
        $.ajax({
            url: 'data/change_pass.php',
            type: 'post',
            dataType: 'json',
            data: {
                pwd: pwd,
                name: name,
                pseudo: pseudo,
                sexe: sexe
            },
            success: function(data) {
                if (data.valid == valid) {
                    $('#modal-pass').modal('hide');
                    $('#modal-msg').find('#msg-body').text(data.msg);
                    $('#modal-msg').modal('show');
                }
            },
            error: function() {
                eMsg(387);
            }
        });
    }
});