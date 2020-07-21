var valid = true;


function eMsg(message) {
    alert('Error: L' + message + '+');
} //end eMsg

//laundry type
$('#newVideo2').click(function(event) {
    /* Act on the event */
    $('#type-type').val('insert');
    $('#type').val('');
    $('#price').val('');
    $('#modal-video').find('.modal-title').text('Ajouter une vidéo');
    $('#modal-lau-type').modal('show');
});

//inset new type
$(document).on('submit', '#form-new-video', function(event) {
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
function all_videos() {
    $.ajax({
        url: 'module/data/all_videos.php',
        type: 'post',
        success: function(data) {
            $('#table-videos').html(data);
        },
        error: function() {
            eMsg(45);
        }
    });
} //end all_type
all_videos();

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
/*function all_laundry() {
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
all_laundry();*/




function tous_lexique(){
    $.ajax({
        url: 'module/data/admin_lexique.php',
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
}

tous_lexique();

function tous_cours(){
    $.ajax({
        url: 'module/data/cours.php',
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
}

tous_cours();


//open modal
$('#newLexique').click(function(event) {
    /* Act on the event */
    $('#laun-type').val('insert');
    $('#modal-laun').find('.modal-title').text('Nouveau mot-clé');
    $('#modal-laun').modal('show');
});


//open modal
$('#newVideo').click(function(event) {
    //Act on the event 
    $('#operation_type').val('insert');
    $('#modal-video').find('.modal-title').text('Ajout d\'une vidéo');
    $('#modal-video').modal('show');
});



/*$(document).on('submit', '#form-new-video', function(event) {
    event.preventDefault();

    var modal_operation = $('#operation_type').val(); //insert/update

    if (modal_operation == 'insert') {
        $.ajax({
            type: 'POST',
            url: 'module/data/ajout_video.php',
            data: new FormData(this),
            dataType: 'json',
            cpntentType: false,
            cache: false,
            processData:false,
            success: function(data) {
                if(data.valid == false){
                    $('#modal-video').modal('hide');
                    console.log(data.video);
                }
                else{
                    console.log('erreur');
                }
            },
            error: function(e) {
                eMsg(163);
            }

        });
    } 

}); //end submit form */

/*
$.ajax({
            url: 'module/data/insert_video.php',
            type: 'post',
            dataType: 'json',
            data: {
                video_titre: video_titre
            },
            success: function(data) {
               if(data['valid'] == true){
                    $('#modal-video').modal('hide');
                    all_videos();
                    alert(data.fichier);
                }
            },
            error: function(e) {
                eMsg(163);
            }
        });

        */

$(document).on('submit', '#form-new-lexique', function(event) {
    event.preventDefault();
    /* Act on the event */
    var modal_type = $('#laun-type').val(); //insert/update
   
    var def = $('#def').val(); 
    var mot = $('#mot').val(); 
    
    if (modal_type == 'insert') {
        $.ajax({
            url: 'module/data/insert_lexique.php',
            type: 'post',
            dataType: 'json',
            data: {
                mot: mot,
                def: def
            },
            success: function(data) {
               if(data['valid'] == true){
                    $('#modal-laun').modal('hide');
                    tous_lexique();
                }
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
$('#delLexique').click(function(event) {
    /* Act on the event */
    var haveCheck = false;
    $('input[type=checkbox]:checked').each(function(index) {
        haveCheck = true;
    });

    if (haveCheck == false) {
        alert('Aucun mot clé sélectionné.');
    } else {
        $('#confirm-type').val('delete-lexique');
        $('#modal-confirm').modal('show');

    }
});

$('#delVideo').click(function(event) {
    /* Act on the event */
    var haveCheck = false;
    $('input[type=checkbox]:checked').each(function(index) {
        haveCheck = true;
    });

    if (haveCheck == false) {
        alert('Aucune vidéo sélectionnée');
    } else {
        $('#confirm-type').val('delete-video');
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
    if (confirmType == 'delete-lexique') {
        //delete laun
        $('input[type=checkbox]:checked').each(function(index) {
            var id = $(this).val();
            $.ajax({
                url: 'module/data/delete_lexique.php',
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
        $('#modal-msg').find('#msg-body').text('Mot-clé supprimé !');
        $('#modal-msg').modal('show');
    } else if (confirmType == 'delete-video') {
        $('input[type=checkbox]:checked').each(function(index) {
            var id = $(this).val();
            $.ajax({
                url: 'module/data/delete_video.php',
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
        $('#modal-msg').find('#msg-body').text('Vidéo supprimée avec succès !');
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
    all_videos();
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
//loadSale();

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
//loadRetire();

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