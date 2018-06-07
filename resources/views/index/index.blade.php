@extends('layouts.master')
@section('title','首页')
@section('main')
    <div id="Main">
        <div class="sep20"></div>
        <div class="box">
            <div class="inner" id="Tabs">
                <a href="/?tab=tech" class="tab_current">技术</a>
                <a href="/?tab=creative" class="tab">创意</a>
            </div>
            <div class="cell" id="SecondaryTabs">
                <a href="/go/nodejs" class="tab_current">最新问答</a> &nbsp; &nbsp;
                <a href="/go/cloud">热门问答</a> &nbsp; &nbsp;
                <a href="/go/bb">等待回答</a></div>
            <div class="cell item" style="">
                <table cellpadding="0" cellspacing="0" border="0" width="100%">
                    <tr>
                        <td width="48" valign="top" align="center"><a href="/member/183387594"><img src="//cdn.v2ex.com/avatar/7891/4952/200419_normal.png?m=1499852079" class="avatar" border="0" align="default" /></a></td>
                        <td width="10"></td>
                        <td width="auto" valign="middle"><span class="item_title"><a href="/t/461098#reply4">小米公交卡充值失败</a></span>
                            <div class="sep5"></div>
                            <span class="topic_info"><div class="votes"></div><a class="node" href="/go/gts">全球工单系统</a> &nbsp;•&nbsp; <strong><a href="/member/183387594">183387594</a></strong> &nbsp;•&nbsp; 4 小时 34 分钟前 &nbsp;•&nbsp; 最后回复来自 <strong><a href="/member/henmeiweide">henmeiweide</a></strong></span>
                        </td>
                        <td width="70" align="right" valign="middle">
                            <a href="/t/461098#reply4" class="count_livid">4</a>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="inner">
                <span class="chevron">→</span><a href="/recent">更多新主题</a>
            </div>
        </div>
        <div class="sep20"></div>
    </div>
@endsection()
@section('js')
@endsection()