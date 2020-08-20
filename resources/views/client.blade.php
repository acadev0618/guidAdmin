<!doctype html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            html, body { 
                background-color: #333; 
            }
            .header1{
                color: white; 
                text-align: center; 
                margin-top: 165px; 
                font-size: 65px;
            }
            .header2{
                color: white;
                font-size: 33px;
                margin-top: 14%;
                text-align: center;
            }
            .select_option{
                height: 36px; 
                width: 320px;
            }
            .button1 {
                height: 36px;
                color: black;
                font-size: 16px;
                border-radius: 8px white;
                border-radius: 6px;
                border: white solid 1px;
                background-color: deepskyblue;
            }
            @media only screen and (max-width:500px) {
                /* For mobile phones: */
                .header1 {
                    margin-top: 120px; 
                    font-size: 50px;
                }
                .header2{
                    font-size: 22px;
                    margin-top: 52%;
                }
                .select_option{
                    height: 35px; 
                    width: 210px;
                    font-size: 14px;
                }
                .button1 {
                    height: 35px;
                    font-size: 14px;
                }
            }
        </style>

        <script src='https://jitsi.guidyo.net/external_api.js'></script>
        <script>
            /** CONFIG **/
            function init() {
                //document.getElementById("startdlg").style.visibility = "hidden";
                var channel_name = document.getElementById("channel_name").value;
                document.getElementById("startdlg").innerHTML = "";
                const domain = 'jitsi.guidyo.net';
                const options = {
                    roomName: channel_name,
                    width: 1024,
                    height: 700,
                    configOverwrite: { 
                        startAudioOnly: true,
                        startWithAudioMuted:true,
                        startSilent:false,
                        enableWelcomePage: false,
                        enableClosePage: false,
                        prejoinPageEnabled: false,
                        enableInsecureRoomNameWarning: false,
                        disableThirdPartyRequests: false
                         },
                    interfaceConfigOverwrite: {
                        APP_NAME: 'Guid.fm for Listener',
                        DISABLE_JOIN_LEAVE_NOTIFICATIONS: true,
                        TOOLBAR_BUTTONS: [
                            'hangup'
                        ],
                     },
                };
                const api = new JitsiMeetExternalAPI(domain, options);
                api.executeCommand('displayName', 'smiss');
            }

        </script>

    </head>
    <body>
        <div id="startdlg">
        <h1 class="header1">Guide.fm for Listener</h1>
        <p class="header2">Select Channel</p>
        <div style="text-align: center;">
            <select class="select_option" id="channel_name">
                @foreach ($rooms as $room)
                    <option value="{{$room->room_name}}">{{$room->room_name}}</option>
                @endforeach
            </select>
            <button class="button1" onclick="init()">Join
            </button>
        </div>
    </div>
    </body>
</html>
