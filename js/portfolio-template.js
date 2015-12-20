var feed = new Instafeed({
    userId: '10535814',
    get: 'user',
    accessToken: '236529641.1677ed0.0b45e40be3ec42aab430babba331f64e',
    clientID: '1753a44bb2824810af56532c0b7363f5',
    resolution: 'standard_resolution',
    limit: '9',
    template: '<div class="col-sm-4 col-xs-6 portfolio-grid"> <!-- trigger portfolio modal (image thumbnail) --> <a data-toggle="modal" data-target="#{{id}}"> <img src="{{model.images.standard_resolution.url}}" class="img-responsive portfolio-img" /> </a> <div id="{{id}}" class="modal modal-fullscreen fade" role="dialog"> <div class="modal-dialog"> <div class="modal-content"> <div class="modal-body"> <img src="{{model.images.standard_resolution.url}}" class="lm-responsive"/> </div> <div class="close-modal" data-dismiss="modal">Close</div> </div> </div> </div> </div>'
});
feed.run();
