jQuery(document).ready(function($){
    var mediaUploaderPicture;
    var mediaUploaderLogo;
    $('#wd-upload-profile-picture-btn').on('click',function (e) {
        e.preventDefault();
        if(mediaUploaderPicture){
            mediaUploaderPicture.open();
            return;
        }

        mediaUploaderPicture = wp.media.frames.file_frame = wp.media({
            title: 'Photo de profil',
            button: {
                text:'Choisissez votre photo de profil'
            },
            multiple:false
        });
        mediaUploaderPicture.on('select',function(){
            wdProfilePicture = mediaUploaderPicture.state().get('selection').first().toJSON();
            $('#wd-upload-profile-picture').val(wdProfilePicture.url);
            $('#profile-picture-preview').attr('src',wdProfilePicture.url);
        });
        mediaUploaderPicture.open();
    });

    $('#wd-upload-logo-btn').on('click',function (e) {
        e.preventDefault();
        if(mediaUploaderLogo){
            mediaUploaderLogo.open();
            return;
        }

        mediaUploaderLogo = wp.media.frames.file_frame = wp.media({
            title: 'Logo de la société',
            button: {
                text:'Choisissez votre logo société'
            },
            multiple:false
        });
        mediaUploaderLogo.on('select',function(){
            wdCompanyLogo = mediaUploaderLogo.state().get('selection').first().toJSON();
            $('#wd-upload-company-logo').val(wdCompanyLogo.url);
            $('#company-logo-preview').attr('src',wdCompanyLogo.url);
        });
        mediaUploaderLogo.open();
    });
    $('#wd-delete-profile-picture-btn').on('click',function(e){
        e.preventDefault();
        var wdPictureDelete = confirm('Etes vous sûr de vouloir supprimer votre photo');
        if(wdPictureDelete==true){
            $('#wd-upload-profile-picture').val('');
            $('#wd-meta-personal-form').submit();
        }else{
            return;
        }
    });
});