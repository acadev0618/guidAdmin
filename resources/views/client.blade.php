<!doctype html>
<html>
    <head>
        <style>
            html, body { 
                background-color: #333; 
            }
        </style>

        <script src='https://meet.jit.si/external_api.js'></script>
        <script>
            /** CONFIG **/
            function init() {
                //document.getElementById("startdlg").style.visibility = "hidden";
                var channel_name = document.getElementById("channel_name").value;
                document.getElementById("startdlg").innerHTML = "";
                const domain = 'meet.jit.si';
                const options = {
                    roomName: channel_name,
                    width: 1024,
                    height: 700,
                    configOverwrite: { 
                        startAudioOnly: true,
                        enableWelcomePage: false,
                        enableClosePage: true,
                        prejoinPageEnabled: false,
                        enableInsecureRoomNameWarning: false,
                        disableThirdPartyRequests: true
                         },
                    interfaceConfigOverwrite: {
                        APP_NAME: 'Guid.fm for Listener',
                        DISABLE_JOIN_LEAVE_NOTIFICATIONS: true,
                        TOOLBAR_BUTTONS: [
                            'microphone', 'hangup'
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
        <h1 style="color: white; text-align: center; margin-top: 165px; font-size: 65px;">Guide.fm for Listener</h1>
        <p style="    color: white;
            font-size: 33px;
            margin-top: 14%;
            text-align: center;">Select Channel</p>
        <div style="text-align: center;">
            {{-- <input type="text" style="height: 27px; width: 200px;" name="" id="channel_name" placeholder="Enter channel"> --}}
            <select style="height: 36px; width: 320px;" id="channel_name">
                @foreach ($rooms as $room)
            <option value="{{$room->room_name}}">{{$room->room_name}}</option>
                @endforeach
            </select>
            <button onclick="init()" style="height: 36px;
                color: black;
                font-size: 16px;
                border-radius: 8px white;
                border-radius: 6px;
                border: white solid 1px;
                background-color: deepskyblue;">Join
            </button>
        </div>
    </div>
    </body>
</html>
