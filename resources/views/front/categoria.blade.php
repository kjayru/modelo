@extends('layouts.front.master')
@section('content')


<section class="section" id="introduce">
    <div class="section-background bg">
        <div class="image background-image-loaded image-loaded" style="background-image: url(&quot;/images/vip.jpg&quot;);"> <img src="/images/vip.jpg" alt="El Silencio"></div>
    </div>
    <div class="section-video">
        <div class="flowplayer is-mouseout fp-default-playlist is-muted is-ready is-playing has-title is-live-position" data-m3u8="//cdn.flowplayer.org/328646/421588.m3u8" data-mp4="//cdn.flowplayer.org/328646/421588-720p.mp4" id="player" data-flowplayer-instance-id="0">
            <div class="fp-ratio" style="padding-top: 41.6667%;"></div>
            <div class="fp-player">
                <video src="https://cdn.flowplayer.org/328646/421588-720p.mp4" class="fp-engine " autoplay="" preload="true" webkit-playsinline="true" playsinline="true" loop="" x-webkit-airplay="allow"></video>
                <div class="fp-ui">
                    <div class="fp-message fp-title">Javascript setup (autoplay)</div>
                    <div class="fp-waiting">
                        <svg class="fp-loading-sharp-outline" width="112px" height="112px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid">
                            <rect x="0" y="0" width="76" height="76" fill="rgba(0,0,0,0)" class="bk"></rect>
                            <rect x="-9" y="-9" width="18" height="18" transform="translate(25 25)" fill="none" stroke="rgba(0,0,0,.5)" stroke-width="3%" class="sq">
                                <animate attributeName="stroke" from="rgba(0,0,0,0)" to="rgba(0,0,0,.5)" repeatCount="indefinite" dur="1.6s" begin="0.0s" values="rgba(0,0,0,.5);rgba(0,0,0,0);rgba(0,0,0,0);rgba(0,0,0,.5);rgba(0,0,0,.5)" keyTimes="0;0.1;0.2;0.4;1"></animate>
                                <animateTransform attributeName="transform" type="scale" additive="sum" from="0.8" to="1" repeatCount="indefinite" begin="0.0s" dur="1.6s" values="1;0.8;0.8;1;1" keyTimes="0;0.1;0.2;0.4;1"></animateTransform>
                            </rect>
                            <rect x="-9" y="-9" width="18" height="18" transform="translate(50 25)" fill="none" stroke="rgba(0,0,0,.5)" stroke-width="3%" class="sq">
                                <animate attributeName="stroke" from="rgba(0,0,0,0)" to="rgba(0,0,0,.5)" repeatCount="indefinite" dur="1.6s" begin="0.4s" values="rgba(0,0,0,.5);rgba(0,0,0,0);rgba(0,0,0,0);rgba(0,0,0,.5);rgba(0,0,0,.5)" keyTimes="0;0.1;0.2;0.4;1"></animate>
                                <animateTransform attributeName="transform" type="scale" additive="sum" from="0.8" to="1" repeatCount="indefinite" begin="0.4s" dur="1.6s" values="1;0.8;0.8;1;1" keyTimes="0;0.1;0.2;0.4;1"></animateTransform>
                            </rect>
                            <rect x="-9" y="-9" width="18" height="18" transform="translate(50 50)" fill="none" stroke="rgba(0,0,0,.5)" stroke-width="3%" class="sq">
                                <animate attributeName="stroke" from="rgba(0,0,0,0)" to="rgba(0,0,0,.5)" repeatCount="indefinite" dur="1.6s" begin="0.8s" values="rgba(0,0,0,.5);rgba(0,0,0,0);rgba(0,0,0,0);rgba(0,0,0,.5);rgba(0,0,0,.5)" keyTimes="0;0.1;0.2;0.4;1"></animate>
                                <animateTransform attributeName="transform" type="scale" additive="sum" from="0.8" to="1" repeatCount="indefinite" begin="0.8s" dur="1.6s" values="1;0.8;0.8;1;1" keyTimes="0;0.1;0.2;0.4;1"></animateTransform>
                            </rect>
                            <rect x="-9" y="-9" width="18" height="18" transform="translate(25 50)" fill="none" stroke="rgba(0,0,0,.5)" stroke-width="3%" class="sq">
                                <animate attributeName="stroke" from="rgba(0,0,0,0)" to="rgba(0,0,0,.5)" repeatCount="indefinite" dur="1.6s" begin="1.2s" values="rgba(0,0,0,.5);rgba(0,0,0,0);rgba(0,0,0,0);rgba(0,0,0,.5);rgba(0,0,0,.5)" keyTimes="0;0.1;0.2;0.4;1"></animate>
                                <animateTransform attributeName="transform" type="scale" additive="sum" from="0.8" to="1" repeatCount="indefinite" begin="1.2s" dur="1.6s" values="1;0.8;0.8;1;1" keyTimes="0;0.1;0.2;0.4;1"></animateTransform>
                            </rect>
                        </svg>
                        <svg class="fp-loading-sharp-fill" width="112px" height="112px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid">
                            <rect x="0" y="0" width="76" height="76" fill="rgba(0,0,0,0)" class="bk"></rect>
                            <rect x="-10" y="-10" width="20" height="20" transform="translate(25 25)" fill="rgba(0,0,0,.5)" class="sq">
                                <animate attributeName="fill" from="rgba(0,0,0,0)" to="rgba(0,0,0,.5)" repeatCount="indefinite" dur="1.6s" begin="0.0s" values="rgba(0,0,0,.5);rgba(0,0,0,0);rgba(0,0,0,0);rgba(0,0,0,.5);rgba(0,0,0,.5)" keyTimes="0;0.1;0.2;0.4;1"></animate>
                                <animateTransform attributeName="transform" type="scale" additive="sum" from="0.8" to="1" repeatCount="indefinite" begin="0.0s" dur="1.6s" values="1;0.8;0.8;1;1" keyTimes="0;0.1;0.2;0.4;1"></animateTransform>
                            </rect>
                            <rect x="-10" y="-10" width="20" height="20" transform="translate(50 25)" fill="rgba(0,0,0,.5)" class="sq">
                                <animate attributeName="fill" from="rgba(0,0,0,0)" to="rgba(0,0,0,.5)" repeatCount="indefinite" dur="1.6s" begin="0.4s" values="rgba(0,0,0,.5);rgba(0,0,0,0);rgba(0,0,0,0);rgba(0,0,0,.5);rgba(0,0,0,.5)" keyTimes="0;0.1;0.2;0.4;1"></animate>
                                <animateTransform attributeName="transform" type="scale" additive="sum" from="0.8" to="1" repeatCount="indefinite" begin="0.4s" dur="1.6s" values="1;0.8;0.8;1;1" keyTimes="0;0.1;0.2;0.4;1"></animateTransform>
                            </rect>
                            <rect x="-10" y="-10" width="20" height="20" transform="translate(50 50)" fill="rgba(0,0,0,.5)" class="sq">
                                <animate attributeName="fill" from="rgba(0,0,0,0)" to="rgba(0,0,0,.5)" repeatCount="indefinite" dur="1.6s" begin="0.8s" values="rgba(0,0,0,.5);rgba(0,0,0,0);rgba(0,0,0,0);rgba(0,0,0,.5);rgba(0,0,0,.5)" keyTimes="0;0.1;0.2;0.4;1"></animate>
                                <animateTransform attributeName="transform" type="scale" additive="sum" from="0.8" to="1" repeatCount="indefinite" begin="0.8s" dur="1.6s" values="1;0.8;0.8;1;1" keyTimes="0;0.1;0.2;0.4;1"></animateTransform>
                            </rect>
                            <rect x="-10" y="-10" width="20" height="20" transform="translate(25 50)" fill="rgba(0,0,0,.5)" class="sq">
                                <animate attributeName="fill" from="rgba(0,0,0,0)" to="rgba(0,0,0,.5)" repeatCount="indefinite" dur="1.6s" begin="1.2s" values="rgba(0,0,0,.5);rgba(0,0,0,0);rgba(0,0,0,0);rgba(0,0,0,.5);rgba(0,0,0,.5)" keyTimes="0;0.1;0.2;0.4;1"></animate>
                                <animateTransform attributeName="transform" type="scale" additive="sum" from="0.8" to="1" repeatCount="indefinite" begin="1.2s" dur="1.6s" values="1;0.8;0.8;1;1" keyTimes="0;0.1;0.2;0.4;1"></animateTransform>
                            </rect>
                        </svg>
                        <svg class="fp-loading-rounded-fill" width="112px" height="112px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid">
                            <rect x="0" y="0" width="76" height="76" fill="rgba(0,0,0,0)" class="bk"></rect>
                            <circle cx="0" cy="0" r="10" transform="translate(25 25)" fill="rgba(0,0,0,.5)" class="sq">
                                <animate attributeName="fill" from="rgba(0,0,0,0)" to="rgba(0,0,0,.5)" repeatCount="indefinite" dur="1.6s" begin="0.0s" values="rgba(0,0,0,.5);rgba(0,0,0,0);rgba(0,0,0,0);rgba(0,0,0,.5);rgba(0,0,0,.5)" keyTimes="0;0.1;0.2;0.4;1"></animate>
                                <animateTransform attributeName="transform" type="scale" additive="sum" from="0.8" to="1" repeatCount="indefinite" begin="0.0s" dur="1.6s" values="1;0.8;0.8;1;1" keyTimes="0;0.1;0.2;0.4;1"></animateTransform>
                            </circle>
                            <circle cx="0" cy="0" r="10" transform="translate(50 25)" fill="rgba(0,0,0,.5)" class="sq">
                                <animate attributeName="fill" from="rgba(0,0,0,0)" to="rgba(0,0,0,.5)" repeatCount="indefinite" dur="1.6s" begin="0.4s" values="rgba(0,0,0,.5);rgba(0,0,0,0);rgba(0,0,0,0);rgba(0,0,0,.5);rgba(0,0,0,.5)" keyTimes="0;0.1;0.2;0.4;1"></animate>
                                <animateTransform attributeName="transform" type="scale" additive="sum" from="0.8" to="1" repeatCount="indefinite" begin="0.4s" dur="1.6s" values="1;0.8;0.8;1;1" keyTimes="0;0.1;0.2;0.4;1"></animateTransform>
                            </circle>
                            <circle cx="0" cy="0" r="10" transform="translate(50 50)" fill="rgba(0,0,0,.5)" class="sq">
                                <animate attributeName="fill" from="rgba(0,0,0,0)" to="rgba(0,0,0,.5)" repeatCount="indefinite" dur="1.6s" begin="0.8s" values="rgba(0,0,0,.5);rgba(0,0,0,0);rgba(0,0,0,0);rgba(0,0,0,.5);rgba(0,0,0,.5)" keyTimes="0;0.1;0.2;0.4;1"></animate>
                                <animateTransform attributeName="transform" type="scale" additive="sum" from="0.8" to="1" repeatCount="indefinite" begin="0.8s" dur="1.6s" values="1;0.8;0.8;1;1" keyTimes="0;0.1;0.2;0.4;1"></animateTransform>
                            </circle>
                            <circle cx="0" cy="0" r="10" transform="translate(25 50)" fill="rgba(0,0,0,.5)" class="sq">
                                <animate attributeName="fill" from="rgba(0,0,0,0)" to="rgba(0,0,0,.5)" repeatCount="indefinite" dur="1.6s" begin="1.2s" values="rgba(0,0,0,.5);rgba(0,0,0,0);rgba(0,0,0,0);rgba(0,0,0,.5);rgba(0,0,0,.5)" keyTimes="0;0.1;0.2;0.4;1"></animate>
                                <animateTransform attributeName="transform" type="scale" additive="sum" from="0.8" to="1" repeatCount="indefinite" begin="1.2s" dur="1.6s" values="1;0.8;0.8;1;1" keyTimes="0;0.1;0.2;0.4;1"></animateTransform>
                            </circle>
                        </svg>
                        <svg class="fp-loading-rounded-outline" width="112px" height="112px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid">
                            <rect x="0" y="0" width="76" height="76" fill="rgba(0,0,0,0)" class="bk"></rect>
                            <circle cx="0" cy="0" r="10" transform="translate(25 25)" fill="none" stroke="rgba(0,0,0,.5)" stroke-width="3%" class="sq">
                                <animate attributeName="stroke" from="rgba(0,0,0,0)" to="rgba(0,0,0,.5)" repeatCount="indefinite" dur="1.6s" begin="0.0s" values="rgba(0,0,0,.5);rgba(0,0,0,0);rgba(0,0,0,0);rgba(0,0,0,.5);rgba(0,0,0,.5)" keyTimes="0;0.1;0.2;0.4;1"></animate>
                                <animateTransform attributeName="transform" type="scale" additive="sum" from="0.8" to="1" repeatCount="indefinite" begin="0.0s" dur="1.6s" values="1;0.8;0.8;1;1" keyTimes="0;0.1;0.2;0.4;1"></animateTransform>
                            </circle>
                            <circle cx="0" cy="0" r="10" transform="translate(50 25)" fill="none" stroke="rgba(0,0,0,.5)" stroke-width="3%" class="sq">
                                <animate attributeName="stroke" from="rgba(0,0,0,0)" to="rgba(0,0,0,.5)" repeatCount="indefinite" dur="1.6s" begin="0.4s" values="rgba(0,0,0,.5);rgba(0,0,0,0);rgba(0,0,0,0);rgba(0,0,0,.5);rgba(0,0,0,.5)" keyTimes="0;0.1;0.2;0.4;1"></animate>
                                <animateTransform attributeName="transform" type="scale" additive="sum" from="0.8" to="1" repeatCount="indefinite" begin="0.4s" dur="1.6s" values="1;0.8;0.8;1;1" keyTimes="0;0.1;0.2;0.4;1"></animateTransform>
                            </circle>
                            <circle cx="0" cy="0" r="10" transform="translate(50 50)" fill="none" stroke="rgba(0,0,0,.5)" stroke-width="3%" class="sq">
                                <animate attributeName="stroke" from="rgba(0,0,0,0)" to="rgba(0,0,0,.5)" repeatCount="indefinite" dur="1.6s" begin="0.8s" values="rgba(0,0,0,.5);rgba(0,0,0,0);rgba(0,0,0,0);rgba(0,0,0,.5);rgba(0,0,0,.5)" keyTimes="0;0.1;0.2;0.4;1"></animate>
                                <animateTransform attributeName="transform" type="scale" additive="sum" from="0.8" to="1" repeatCount="indefinite" begin="0.8s" dur="1.6s" values="1;0.8;0.8;1;1" keyTimes="0;0.1;0.2;0.4;1"></animateTransform>
                            </circle>
                            <circle cx="0" cy="0" r="10" transform="translate(25 50)" fill="none" stroke="rgba(0,0,0,.5)" stroke-width="3%" class="sq">
                                <animate attributeName="stroke" from="rgba(0,0,0,0)" to="rgba(0,0,0,.5)" repeatCount="indefinite" dur="1.6s" begin="1.2s" values="rgba(0,0,0,.5);rgba(0,0,0,0);rgba(0,0,0,0);rgba(0,0,0,.5);rgba(0,0,0,.5)" keyTimes="0;0.1;0.2;0.4;1"></animate>
                                <animateTransform attributeName="transform" type="scale" additive="sum" from="0.8" to="1" repeatCount="indefinite" begin="1.2s" dur="1.6s" values="1;0.8;0.8;1;1" keyTimes="0;0.1;0.2;0.4;1"></animateTransform>
                            </circle>
                        </svg>
                    </div>
                    <div class="fp-header">
                        <a class="fp-share fp-icon"></a>
                        <a class="fp-fullscreen fp-icon"></a>
                        <a class="fp-unload fp-icon"></a>
                    </div>
                    <p class="fp-speed-flash"></p>
                    <div class="fp-play">
                        <a class="fp-icon fp-playbtn"></a>
                        <svg class="fp-play-rounded-fill" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
                            <defs>
                                <style>
                                    .a {
                                        fill: #000;
                                        opacity: 0.65;
                                    }
                                    
                                    .b {
                                        fill: #fff;
                                        opacity: 1.0;
                                    }
                                </style>
                            </defs>
                            <title>play-rounded-fill</title>
                            <path class="fp-color-play" d="M49.9217-.078a50,50,0,1,0,50,50A50.0564,50.0564,0,0,0,49.9217-.078Z"></path>
                            <path class="b" d="M35.942,35.2323c0-4.7289,3.3506-6.6637,7.446-4.2971L68.83,45.6235c4.0956,2.364,4.0956,6.2319,0,8.5977L43.388,68.91c-4.0954,2.364-7.446.43-7.446-4.2979Z" filter="url(/escorts-vip#f1)"></path>
                        </svg>

                        <svg class="fp-play-rounded-outline" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 99.844 99.8434">
                            <defs>
                                <style>
                                    .fp-color-play {
                                        opacity: 0.65;
                                    }
                                    
                                    .controlbutton {
                                        fill: #fff;
                                    }
                                </style>
                            </defs>
                            <title>play-rounded-outline</title>
                            <path class="fp-color-play" d="M49.9217-.078a50,50,0,1,0,50,50A50.0564,50.0564,0,0,0,49.9217-.078Z"></path>
                            <path class="controlbutton" d="M41.0359,71.19a5.0492,5.0492,0,0,1-2.5575-.6673c-1.8031-1.041-2.7958-3.1248-2.7958-5.8664V35.1887c0-2.7429.9933-4.8272,2.797-5.8676,1.8025-1.0422,4.1034-.86,6.48.5143L70.4782,44.5672c2.3751,1.3711,3.6826,3.2725,3.6832,5.3545s-1.3076,3.9845-3.6832,5.3562L44.9592,70.0114A7.9384,7.9384,0,0,1,41.0359,71.19Zm.0065-40.123a2.6794,2.6794,0,0,0-1.3582.3413c-1.0263.5926-1.5912,1.9349-1.5912,3.78V64.6563c0,1.8449.5649,3.1866,1.5906,3.7791,1.0281.5932,2.4733.4108,4.07-.512L69.273,53.1906c1.5983-.9227,2.478-2.0838,2.478-3.2689s-.88-2.3445-2.478-3.2666L43.754,31.9227A5.5685,5.5685,0,0,0,41.0423,31.0671Z" filter="url(/escorts-vip#f1)"></path>
                        </svg>
                        <svg class="fp-play-sharp-fill" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
                            <defs>
                                <style>
                                    .fp-color-play {
                                        opacity: 0.65;
                                    }
                                    
                                    .controlbutton {
                                        fill: #fff;
                                    }
                                </style>
                            </defs>
                            <title>play-sharp-fill</title>
                            <path class="fp-color-play" d="M49.9217-.078a50,50,0,1,0,50,50A50.0564,50.0564,0,0,0,49.9217-.078Z"></path>
                            <polygon class="controlbutton" points="73.601 50 37.968 70.573 37.968 29.427 73.601 50" filter="url(/escorts-vip#f1)"></polygon>
                        </svg>
                        <svg class="fp-play-sharp-outline" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 99.844 99.8434">
                            <defs>
                                <style>
                                    .controlbuttonbg {
                                        opacity: 0.65;
                                    }
                                    
                                    .controlbutton {
                                        fill: #fff;
                                    }
                                </style>
                            </defs>
                            <title>play-sharp-outline</title>
                            <path class="fp-color-play" d="M49.9217-.078a50,50,0,1,0,50,50A50.0564,50.0564,0,0,0,49.9217-.078Z"></path>
                            <path class="controlbutton" d="M36.9443,72.2473V27.2916L75.8776,49.77Zm2.2-41.1455V68.4371L71.4776,49.77Z" filter="url(/escorts-vip#f1)"></path>
                        </svg>
                    </div>
                    <div class="fp-pause">
                        <a class="fp-icon fp-playbtn"></a>
                        <svg class="fp-pause-sharp-outline" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 99.8434 99.8434">
                            <defs>
                                <style>
                                    .fp-color-play {
                                        opacity: 0.65;
                                    }
                                    
                                    .rect {
                                        fill: #fff;
                                    }
                                </style>
                            </defs>
                            <title>pause-sharp-outline</title>
                            <path class="fp-color-play" d="M49.9212-.0783a50,50,0,1,0,50.0006,50A50.0562,50.0562,0,0,0,49.9212-.0783Z"></path>
                            <g class="controlbutton" filter="url(/escorts-vip#f1)">
                                <path class="rect" d="M46.8709,69.9531H33.1385V29.89H46.8709ZM35.1416,67.95h9.7262V31.8935H35.1416Z"></path>
                                <path class="rect" d="M66.7047,69.9531H52.9722V29.89H66.7047ZM54.9754,67.95h9.7262V31.8935H54.9754Z"></path>
                            </g>
                        </svg>
                        <svg class="fp-pause-sharp-fill" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
                            <defs>
                                <style>
                                    .fp-color-play {
                                        opacity: 0.65;
                                    }
                                    
                                    .rect {
                                        fill: #fff;
                                    }
                                </style>
                            </defs>
                            <title>pause-sharp-fill</title>
                            <path class="fp-color-play" d="M49.9217-.078a50,50,0,1,0,50,50A50.0564,50.0564,0,0,0,49.9217-.078Z"></path>
                            <g class="controlbutton" filter="url(/escorts-vip#f1)">
                                <rect class="rect" x="33.5" y="30.1042" width="12.2634" height="39.7917"></rect>
                                <rect class="rect" x="54.2366" y="30.1042" width="12.2634" height="39.7917"></rect>
                            </g>
                        </svg>
                        <svg class="fp-pause-rounded-outline" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 99.8434 99.8434">
                            <defs>
                                <style>
                                    .fp-color-play {
                                        opacity: 0.65;
                                    }
                                    
                                    .rect {
                                        fill: #fff;
                                    }
                                </style>
                            </defs>
                            <title>pause-rounded-outline</title>
                            <path class="fp-color-play" d="M49.9212-.0783a50,50,0,1,0,50.0006,50A50.0562,50.0562,0,0,0,49.9212-.0783Z"></path>
                            <g class="controlbutton">
                                <path class="rect" d="M39.0036,71.9726a7.565,7.565,0,0,1-7.557-7.556v-28.99a7.5565,7.5565,0,0,1,15.113,0v28.99A7.5648,7.5648,0,0,1,39.0036,71.9726Zm0-41.904a5.3647,5.3647,0,0,0-5.3593,5.3582v28.99a5.3587,5.3587,0,0,0,10.7174,0v-28.99A5.3645,5.3645,0,0,0,39.0036,30.0686Z" filter="url(/escorts-vip#f1)"></path>
                                <path class="rect" d="M60.84,71.9726a7.5648,7.5648,0,0,1-7.556-7.556v-28.99a7.5565,7.5565,0,0,1,15.113,0v28.99A7.565,7.565,0,0,1,60.84,71.9726Zm0-41.904a5.3645,5.3645,0,0,0-5.3582,5.3582v28.99a5.3587,5.3587,0,0,0,10.7174,0v-28.99A5.3647,5.3647,0,0,0,60.84,30.0686Z" filter="url(/escorts-vip#f1)"></path>
                            </g>
                        </svg>
                        <svg class="fp-pause-rounded-fill" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
                            <defs>
                                <style>
                                    .fp-color-play {
                                        opacity: 0.65;
                                    }
                                    
                                    .rect {
                                        fill: #fff;
                                    }
                                </style>
                            </defs>
                            <title>pause-rounded-fill</title>
                            <path class="fp-color-play" d="M49.9217-.078a50,50,0,1,0,50,50A50.0564,50.0564,0,0,0,49.9217-.078Z"></path>
                            <g class="controlbutton" filter="url(/escorts-vip#f1)">
                                <rect class="rect" x="31.844" y="28.1231" width="13.4362" height="43.5973" rx="6.7181" ry="6.7181"></rect>
                                <rect class="rect" x="54.5638" y="28.1231" width="13.4362" height="43.5973" rx="6.7181" ry="6.7181"></rect>
                            </g>
                        </svg>
                    </div>
                    <div class="fp-controls">
                        <a class="fp-icon fp-playbtn"></a> <span class="fp-elapsed">00:04</span>
                        <div class="fp-timeline fp-bar">
                            <div class="fp-buffer" style="width: 100%;"></div> <span class="fp-timestamp"></span>
                            <div class="fp-progress fp-color animated" style="transition-duration: 250ms; width: 25.7%;"></div>
                        </div> <span class="fp-duration">00:17</span> <span class="fp-remaining">00:13</span>
                        <div class="fp-volume">
                            <a class="fp-icon fp-volumebtn"></a>
                            <div class="fp-volumebar fp-bar-slider"> <em class="fp-grey"></em><em class="fp-grey"></em><em class="fp-grey"></em><em class="fp-grey"></em><em class="fp-grey"></em><em class="fp-grey"></em><em class="fp-grey"></em> </div>
                        </div> <strong class="fp-speed fp-hidden"></strong> <strong class="fp-cc fp-hidden">CC</strong><strong class="fp-qsel">HD</strong></div>
                    <div class="fp-menu fp-share-menu"><strong>Share</strong><a class="fp-icon fp-twitter">Twitter</a><a class="fp-icon fp-embed" title="Copy to your site">Embed</a></div>
                    <div class="fp-menu fp-subtitle-menu"><strong>Closed Captions</strong><a data-subtitle-index="-1" class="fp-selected">No subtitles</a></div>
                    <div class="fp-menu fp-qsel-menu"><strong>Quality</strong><a data-quality="-1">-1</a><a data-quality="0">0</a><a data-quality="1">1</a><a data-quality="2">2</a><a data-quality="3">3</a><a data-quality="4" class="fp-selected fp-color">4</a></div>
                </div>
                <div class="fp-help">
                    <a class="fp-close"></a>
                    <div class="fp-help-section fp-help-basics">
                        <p><em>space</em>play / pause</p>
                        <p><em>q</em>unload | stop</p>
                        <p><em>f</em>fullscreen</p>
                        <p><em>shift</em> + <em>←</em><em>→</em>slower / faster</p>
                    </div>
                    <div class="fp-help-section">
                        <p><em>↑</em><em>↓</em>volume</p>
                        <p><em>m</em>mute</p>
                    </div>
                    <div class="fp-help-section">
                        <p><em>←</em><em>→</em>seek</p>
                        <p><em>&nbsp;. </em>seek to previous </p>
                        <p><em>1</em><em>2</em>… <em>6</em> seek to 10%, 20% … 60% </p>
                    </div>
                </div>
                <div class="fp-context-menu fp-menu"><strong>© 2017 Flowplayer</strong><a href="https://flowplayer.org/hello">About Flowplayer</a><a href="https://flowplayer.org/license">GPL based license</a></div>
                <div class="fp-captions"></div>
            </div>
            <a href="https://flowplayer.org/hello" style="display: none;"></a>
        </div>
    </div>
    <div class="section-content is-large">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-box">
                        <h1 class="line">ESCORTS {{ $paquete }}</h1>
                        <div class="paragraph">
                            <p>Mujeres que ofrecen servicios de compañía 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section" id="search">
    <div class="section-content">
        <div class="search-box">
            <h1 class="line"> Encuentra tu <strong>experiencia perfecta</strong></h1>

            @include('layouts.front.partials.buscador')
            
        </div>
    </div>
</section>

<!-- mobile-->
<section class="section" id="search_mobile">
    <div class="container-fluid">
        <h2>Escribe lo que buscas...</h2>
        <form action="#" autocomplete="off" data-autocomplete="/api/searchtags" id="mobile_form">
            <input type="hidden" name="q">
            <div class="fields">
                <input type="text" id="mobile_input" class="search_mobile" name="search_mobile" value="" placeholder="Servicio, contextura, ubicación, etc.">
                <button class="icon"></button>
            </div>
            <input type="hidden" name="params" value="">
            
        </form>
        <div class="tags" id="mobile_tags"></div>
    </div>
</section>
<!-- endmobile-->

<!--galleria-->
<section class="section" id="gallery">
    <div class="section-content">
        <div class="container">
            <div id="grid-data" class="row">
                <!---->
                <div class="grid isotope">
               @if(!empty(@$scorts )) 
                    @foreach($scorts as $key => $scort)
                        <article data-order="{{@$scort->id}}" class="article-escort grid-item isotope-item is-big is-load">
                            <figure>
                                <div class="inner">
                                    <div class="girl bg">
                                        <a href="/{{ @$region->name }}/{{ @$scort->id}}/{{ @$scort->name}}" target="_top" class="image background-image-loaded image-loaded" style="background-image:(@if(empty($scort->galleries[0]->thumb)) '/assets/no-foto.jpg'  @else '/storage/galeria/thumb/{{@$scort->galleries[0]->thumb }}' @endif)">
                                            <picture>
                                                @if(empty($scort->galleries[0]->thumb))
                                                <img role="image" src="/assets/no-foto.jpg" class="img-responsive" alt="{{@$scort->name}}">
                                                @else 
                                                    <img role="image" src="/storage/galeria/thumb/{{ @$scort->galleries[0]->thumb }}" alt="{{@$scort->name}}">
                                                @endif
                                            </picture>
                                        </a> <i aria-hidden="true" class="fa fa-video-camera video"></i></div>
                                    <figcaption>
                                        <p></p>
                                            <p>
                                                <a href="#">
                                                    <i aria-hidden="true" class="fa fa-circle" style="display: none;"></i>
                                                    <span>
                                                        <span class="brown">{{ @$scort->name }}</span> 
                                                        <span class="brown number">{{ @$scort->edad }},</span>
                                                        Escort {{ $scort->package->name }} de Apariencia {{ @$scort->etnia}}, Ubicada en {{ @$region->name }}. Servicio de 1:00 hora por 
                                                        <span class="brown number">S/{{ @$scort->costohora }}</span>
                                                    </span>
                                                </a>
                                            </p>
                                        <p></p>
                                    </figcaption>
                                </div>
                            </figure>
                        </article>
                    @endforeach
                    
                @endif
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
