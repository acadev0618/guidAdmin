<script src="{{ asset('assets/jquery.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/jquery-migrate.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/jquery-ui/jquery-ui.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/jquery-slimscroll/jquery.slimscroll.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/jquery.blockui.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/jquery.cokie.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/uniform/jquery.uniform.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/bootstrap-switch/js/bootstrap-switch.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/select2/select2.min.js') }}" type="text/javascript" ></script>
<script src="{{ asset('assets/admin/layout/scripts/metronic.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/admin/layout/scripts/layout.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/admin/layout/scripts/quick-sidebar.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/admin/layout/scripts/demo.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/bootstrap-modal/js/bootstrap-modalmanager.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/bootstrap-modal/js/bootstrap-modal.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/bootstrap-switch.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/custom.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/date.format.js') }}" type="text/javascript"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/PapaParse/4.6.3/papaparse.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js" type="text/javascript" ></script>
<script src="{{ asset('assets/datatables/plugins/bootstrap/dataTables.bootstrap.js') }}" type="text/javascript" ></script>
<script src="{{ asset('assets/datatables/js/dataTables.editor.min.js') }}"></script>
<script src="https://cdn.datatables.net/select/1.3.1/js/dataTables.select.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.2/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.flash.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.html5.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.print.min.js"></script>
<script type="text/javascript" src="https://html2canvas.hertzen.com/dist/html2canvas.js"></script>

<script>
    window.apiurl = "{{env('APP_URL')}}/result/";
    window.baseurl = document.head.querySelector("[name~=baseurl][content]").content;
    window.csrfToken = document.head.querySelector("[name~=csrf-token][content]").content;
    jQuery(document).ready(function() {
        
        Metronic.init();
        Layout.init();
        QuickSidebar.init();
        Demo.init();
                
        TableManaged.init();
    });
</script>
<script>
    var span = $('<span>').css('display','inline-block')
    .css('word-break','break-all').appendTo('body').css('visibility','hidden');
    function initSpan(textarea){
    span.text(textarea.text())
        .width(textarea.width())      
        .css('font',textarea.css('font'));
    }
    $('textarea').on({
        input: function(){
        var text = $(this).val();      
        span.text(text);      
        $(this).height(text ? span.height() : '1.1em');
        },
        focus: function(){
        initSpan($(this));
        },
        keypress: function(e){
            if(e.which == 13) e.preventDefault();
        }
    });
</script>
<script>
    function addConstitutionFunc() {
        var key = window.event.keyCode;
        if (key === 13) {
            document.getElementById("addConstitution").value = document.getElementById("addConstitution").value + "\n";
            return false;
        }
        else {
            return true;
        }
    }

    function addStandingOrderFunc() {
        var key = window.event.keyCode;
        if (key === 13) {
            document.getElementById("addStandingOrder").value = document.getElementById("addStandingOrder").value + "\n";
            return false;
        }
        else {
            return true;
        }
    }

    function addVideoStreamingFunc() {
        var key = window.event.keyCode;
        if (key === 13) {
            document.getElementById("addVideoStreaming").value = document.getElementById("addVideoStreaming").value + "\n";
            return false;
        }
        else {
            return true;
        }
    }

    function addVotesFunc() {
        var key = window.event.keyCode;
        if (key === 13) {
            document.getElementById("addVotes").value = document.getElementById("addVotes").value + "\n";
            return false;
        }
        else {
            return true;
        }
    }

    function addAboutUsFunc() {
        var key = window.event.keyCode;
        if (key === 13) {
            document.getElementById("addAboutUs").value = document.getElementById("addAboutUs").value + "\n";
            return false;
        }
        else {
            return true;
        }
    }

    function addParliamentMembersFunc() {
        var key = window.event.keyCode;
        if (key === 13) {
            document.getElementById("addParliamentMembers").value = document.getElementById("addParliamentMembers").value + "\n";
            return false;
        }
        else {
            return true;
        }
    }
</script>
