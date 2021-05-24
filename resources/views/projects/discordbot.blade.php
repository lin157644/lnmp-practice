@extends('template')

@section('content')
<div id="projectDiscordBot" class="content ">
    <p class="h3">DiscordBot</p>
    <div class="clearfix">
        <div class="col-md-2 float-md-end mb-3 ms-md-3">
            <img src="/img/nextbot.png" alt="NextBotIcon">
        </div>
        <p class="">
            Discord作為近年高速崛起的新興跨平台網路即時通訊平台，
            在疫情時期也是遠距教學的常見平台之一，前段時間更是傳出微軟意圖收購的消息，
            於最近成為了Playstation的合作夥伴，Discord提供了靈活實用的API接口，其主要透過Websocket和HTTP與伺服端溝通，
            任何使用者都可以免費使用，依自己的需求設計擴充既有的功能，
            於是我選擇使用 Python 的第三方API wrapper Discord.py ，其提供良好的Rate Control，
            避免API Request控制不當一類的問題，一開始設計的方向以文字功能為主，
            解決了使用Discord時常見的問題與不便的地方，如快速移動使用者、Reaction Role等，
            並製作許多方便的功能如撥放音樂、建立私人頻道等，支援少見且方便的Slash Command功能，
            目前希望對於多伺服器的支援度可以更好，透過Discord的OAth2於網頁上控制設定，Reaction Role等功能。
            透過製作Bot的過程中也使我建立起OOP的思維方式、版本控制等觀念，也提升了我對於閱讀Document的能力。
        </p>
    </div>
</div>
@endsection