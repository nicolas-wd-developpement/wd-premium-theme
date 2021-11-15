jQuery(document).ready(function($){
    var mediaUploader;
    $('#wd-upload-profile-picture-btn').on('click',function (e) {
        e.preventDefault();
        if(mediaUploader){
            mediaUploader.open();
            return;
        }

        mediaUploader = wp.media.frames.file_frame = wp.media({
            title: 'Photo de profil',
            button: {
                text:'Choisissez votre photo de profil'
            },
            multiple:false
        });
        mediaUploader.on('select',function(){
            wdProfilePicture = mediaUploader.state().get('selection').first().toJSON();
            $('#wd-upload-profile-picture').val(wdProfilePicture.url);
            $('#profile-picture-preview').attr('src',wdProfilePicture.url);
        });
        mediaUploader.open();
    });

    $('#wd-upload-logo-btn').on('click',function (e) {
        e.preventDefault();
        if(mediaUploader){
            mediaUploader.open();
            return;
        }

        mediaUploader = wp.media.frames.file_frame = wp.media({
            title: 'Logo de la société',
            button: {
                text:'Choisissez votre logo société'
            },
            multiple:false
        });
        mediaUploader.on('select',function(){
            wdCompanyLogo = mediaUploader.state().get('selection').first().toJSON();
            $('#wd-upload-company-logo').val(wdCompanyLogo.url);
            $('#company-logo-preview').attr('src',wdCompanyLogo.url);
        });
        mediaUploader.open();
    });
});