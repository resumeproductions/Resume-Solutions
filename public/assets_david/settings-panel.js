$(function(){var isOpened=false;$(".settings-btn").click(function(e){e.preventDefault();$(".settings-panel").slideToggle(500);if(isOpened){isOpened=false;$(this).html('<i class="fa fa-cogs"></i>')}else{$(this).html('<i class="fa fa-times"></i>');isOpened=true}})});