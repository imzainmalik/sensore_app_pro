@extends('layouts.front')
@section('content')

    @include('partials.global.common-header')

    <link rel="stylesheet" href="{{ asset('chat_assets/css/style1.css') }}">
    <link rel="stylesheet" href="{{ asset('chat_assets/css/style2.css') }}">
    <link rel="stylesheet" href="{{ asset('chat_assets/css/style3.css') }}">
    <link rel="stylesheet" href="{{ asset('chat_assets/css/style4.css') }}">
    <link rel="stylesheet" href="{{ asset('chat_assets/css/style6.css') }}">
    <link rel="stylesheet" href="{{ asset('chat_assets/css/style7.css') }}">
    <link rel="stylesheet" href="{{ asset('chat_assets/css/style8.css') }}">
    <link rel="stylesheet" href="{{ asset('chat_assets/css/style9.css') }}">
    <link rel="stylesheet" href="{{ asset('chat_assets/css/style10.css') }}">
    <link rel="stylesheet" href="{{ asset('chat_assets/css/style11.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('chat_assets/css/ConversationPage.css') }}">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap"
        rel="stylesheet">

    <!-- breadcrumb -->
    <div class="full-row bg-light overlay-dark py-5"
        style="background-image: url({{ $gs->breadcrumb_banner ? asset('assets/images/' . $gs->breadcrumb_banner) : asset('assets/images/noimage.png') }}); background-position: center center; background-size: cover;">
        <div class="container">
            <div class="row text-center text-white">
                <div class="col-12">
                    <h3 class="mb-2 text-white">Inbox</h3>
                </div>
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 d-inline-flex bg-transparent p-0">
                            <li class="breadcrumb-item"><a href="{{ route('front.index') }}">{{ __('Home') }}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Inbox</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div id="__ZONE__main">
        <div class="inbox_perseus">
            <article class="knrP_L6 w2M9uo7" data-testid="index-container">
                <div
                    class="w7m89txe w7m89t0 w7m89trp w7m89t1d3 w7m89t212 w7m89t1fg w7m89t1er w7m89t3y w7m89t179 w7m89t115 route">
                    <div class="w7m89tx9 w7m89t0 w7m89ts4 w7m89t1d3 w7m89t1er w7m89t115 RKz5ah_">
                        <div class="w7m89t0 w7m89t1d3 w7m89t1fv w7m89t212 w7m89tmu z6nw1s0">
                            <div class="w7m89txe w7m89t0 w7m89ts4 w7m89t1d3 w7m89tys w7m89t115">
                                <div class="w7m89tjx w7m89tmk w7m89txe w7m89t0 w7m89ts4 w7m89t1d3 w7m89tys w7m89t115">
                                    <div class="yvFG0X6">
                                        <div class="w7m89t0 w7m89twk w7m89t48 jhmiz70" role="button"
                                            data-uw-rm-kbnav="role" tabindex="0">
                                            <div class="w7m89txe w7m89t0 w7m89trz w7m89t1d3 w7m89tzr w7m89t115">
                                                <p class="w7m89t20y w7m89t156 w7m89t13d w7m89t7 w7m89t2 w7m89t9">All
                                                    messages</p>
                                                <div class="w7m89txe w7m89t0 w7m89ts4 w7m89t1d3 w7m89tzr w7m89t115 jhmiz71">
                                                    <svg width="12" height="12" viewBox="0 0 14 9"
                                                        xmlns="http://www.w3.org/2000/svg" fill="#222325">
                                                        <path
                                                            d="M.19 1.272.81.653a.375.375 0 0 1 .53 0L7 6.3 12.66.653a.375.375 0 0 1 .53 0l.62.62a.375.375 0 0 1 0 .53L7.264 8.346a.375.375 0 0 1-.53 0L.19 1.802a.375.375 0 0 1 0-.53Z">
                                                        </path>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w7m89ty3 w7m89tzr w7m89txe w7m89t0 w7m89ts4 w7m89t1d3 w7m89t115"><span
                                            class="yvFG0X6"><button class="sqTmH8M flex flex-items-center tbody-7"
                                                data-testid="search-trigger-button" aria-label="button"
                                                data-uw-rm-empty-ctrl>
                                                <div class="flex flex-center"><svg width="20" height="20"
                                                        viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"
                                                        fill="currentFill">
                                                        <path
                                                            d="m15.89 14.653-3.793-3.794a.37.37 0 0 0-.266-.109h-.412A6.499 6.499 0 0 0 6.5 0C2.91 0 0 2.91 0 6.5a6.499 6.499 0 0 0 10.75 4.919v.412c0 .1.04.194.11.266l3.793 3.794a.375.375 0 0 0 .531 0l.707-.707a.375.375 0 0 0 0-.53ZM6.5 11.5c-2.763 0-5-2.238-5-5 0-2.763 2.237-5 5-5 2.762 0 5 2.237 5 5 0 2.762-2.238 5-5 5Z">
                                                        </path>
                                                    </svg></div>
                                            </button></span></div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="w7m89tzr w7m89tx9 w7m89t0 w7m89trp w7m89t1d3 w7m89t1er w7m89t179 w7m89t188 w7m89tmu w7m89t115">

                            <div class="w7m89t0 w7m89tpm w7m89t1d3">
                                <nav class="contacts-list" data-testid="contacts-list" style="min-height: 70px;">
                                    @if ($conversations->count() > 0)
                                        @foreach ($conversations as $conversation)
                                            @php
                                                $seller = App\Models\User::where('id', $conversation->user_id)->first();
                                            @endphp
                                            <div class="w7m89t0 contact read" role="button" data-testid="contact"
                                                style="transform: translateY(0px);">
                                                <div class="w7m89t0 image-container"><button class="QwpljBX"
                                                        data-testid="avatar" style="border-radius: 50%;">
                                                        <figure class="XzsQBuC" title="{{ $seller->name }}"
                                                            style="font-size: 48px; background-color: rgb(102, 137, 236);">
                                                            <img alt="{{ $seller->name }}" class="vMVfoJD"
                                                                src="{{ asset('assets/images') }}/{{ $seller->photo }}"
                                                                width="100%" role="img" loading="lazy"
                                                                data-uw-rm-alt-original="{{ $seller->name }}"
                                                                data-uw-rm-alt="ALT">
                                                        </figure>
                                                        <div data-testid="AvatarOnlineIndicator" class="rXp2fq3 yPLqM7D"
                                                            style="bottom: 1px; right: 1px;">
                                                            <div class="I_13pNF FxQAFZj"
                                                                style="border-width: 2px; width: 8px; height: 8px;"></div>
                                                        </div>
                                                    </button></div>
                                                <div class="w7m89t0 user-info p-l-12">
                                                    <div class="w7m89tzr w7m89txe w7m89t0 w7m89tru w7m89t1d3 w7m89t115">
                                                        <p
                                                            class="w7m89t20y w7m89t151 w7m89t138 w7m89t8 w7m89t2 w7m89t15q w7m89t9 w7m89t16k">
                                                            {{ $seller->name }}</p>
                                                    </div>
                                                    <section class="tbody-6 m-t-8">
                                                        <p class="flex flex-items-center contact-excerpt">
                                                            <span class="TQJ5FHD"><span>
                                                                    {{ $conversation->last_msg }}
                                                                </span>
                                                        </p>
                                                    </section>
                                                </div>
                                                <aside>
                                                    <div
                                                        class="w7m89ty3 w7m89txe w7m89t0 w7m89trp w7m89t1d3 w7m89tzr w7m89t115">
                                                        <time
                                                            class="time">{{ $conversation->created_at->diffForHumans() }}</time>
                                                        <div class="contact-menu contact-menu-height">
                                                            <div class="yvFG0X6">
                                                                <div class="popover-trigger-wrapper"><button
                                                                        class="glAQDp5 _Q5OMo2"
                                                                        style="width: 16px; height: 16px;"
                                                                        aria-label="button" data-uw-rm-empty-ctrl><svg
                                                                            width="16" height="16"
                                                                            viewBox="0 0 16 4"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            fill="currentFill">
                                                                            <circle cx="2" cy="2" r="2">
                                                                            </circle>
                                                                            <circle cx="8" cy="2" r="2">
                                                                            </circle>
                                                                            <circle cx="14" cy="2" r="2">
                                                                            </circle>
                                                                        </svg></button></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="aside-area"><span class="yvFG0X6"><button
                                                                class="sqTmH8M read-button flex flex-items-center tbody-7"
                                                                data-testid="toggle-read-button" aria-label="button"
                                                                data-uw-rm-empty-ctrl>
                                                                <div class="flex flex-center"><svg width="16"
                                                                        height="16" viewBox="0 0 16 16"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        fill="currentFill">
                                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                                            d="M7.688.07h.622a.727.727 0 0 0-.622 0ZM16 6.544v-1.95c0-.58-.382-1-.781-1.237a8.456 8.456 0 0 0-.427-.216c-.208-.1-.489-.236-.817-.392-.656-.314-1.504-.716-2.343-1.113L9.342.556 8.31.068 7.688.07 6.657.56l-2.29 1.086A691.745 691.745 0 0 0 .824 3.333C.355 3.572 0 4.042 0 4.594v9.709C0 15.24.76 16 1.697 16h12.606C15.24 16 16 15.24 16 14.303V6.545Zm-1.454-.435V4.658a.443.443 0 0 0-.071-.051 5.377 5.377 0 0 0-.075-.038l-.244-.12c-.203-.098-.48-.232-.808-.388-.653-.312-1.5-.713-2.338-1.11l-2.289-1.08-.72-.34-.72.343a6968.975 6968.975 0 0 0-5.442 2.585l-.248.119-.076.036-.023.012-.007.003-.002.001a.179.179 0 0 0-.028.018v1.461L8 9.6l6.546-3.49ZM1.455 7.758v6.545c0 .134.108.242.242.242h12.606a.243.243 0 0 0 .242-.242V7.758l-6.203 3.308a.728.728 0 0 1-.684 0L1.455 7.758Z">
                                                                        </path>
                                                                    </svg></div>
                                                            </button></span><span class="yvFG0X6"><button
                                                                class="sqTmH8M m-l-8 star flex flex-items-center tbody-7"
                                                                data-testid="toggle-star-button" aria-label="button"
                                                                data-uw-rm-empty-ctrl>
                                                                <div class="flex flex-center"><svg width="16"
                                                                        height="16" viewBox="0 0 16 15"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        fill="currentFill">
                                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                                            d="m10.933 9.187 2.942-2.807-4.058-.586L8 2.184l-1.817 3.61-4.058.586 2.942 2.807-.702 3.98L8 11.284l3.625 1.881-.692-3.979ZM16 5.813c0 .17-.125.33-.25.454l-3.49 3.345.826 4.726c.01.067.01.123.01.19 0 .255-.115.472-.394.472a.792.792 0 0 1-.385-.113L8 12.656l-4.317 2.23a.823.823 0 0 1-.385.114c-.279 0-.404-.227-.404-.473 0-.066.01-.122.02-.189l.826-4.726-3.5-3.345C.125 6.144 0 5.983 0 5.813c0-.284.298-.397.538-.435l4.827-.69L7.53.388C7.615.208 7.779 0 8 0c.221 0 .385.208.471.388l2.164 4.3 4.826.69c.231.038.539.151.539.435Z">
                                                                        </path>
                                                                    </svg></div>
                                                            </button></span></div>
                                                </aside>
                                            </div>
                                        @endforeach
                                    @endif
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="w7m89t0 mHazbXn">
                        <div class="w7m89t0 kEN9JU1">
                            <div class="w7m89t0 flex-column ITZJeVW">
                                <header class="conversation-header box-shadow-z1">
                                    <div class="upper-row">
                                        <div class="user-info">
                                            <div class="flex flex-row flex-items-center">
                                                <div class="w7m89t0 w7m89tx4 _1vrlp880 _1vrlp882"></div>
                                                <h1><a href="/amine_haddoud?source=inbox" class="username"
                                                        target="_blank">{{ $seller_details->name }}</a></h1>
                                                <div class="w7m89t0 w7m89tjx"></div>
                                            </div>
                                            <small>
                                                <span>
                                                    <span>Last seen: </span>
                                                    <time>{{ $seller_details->created_at->diffForHumans() }}</time>
                                                </span>
                                                <span>
                                                    <span>Local time: </span>
                                                    <time>{{ $localtime }}</time>
                                                </span>
                                            </small>
                                        </div>
                                    </div>
                                </header>
                                <div class="w7m89t0 knpPX59">
                                    <div class="w7m89t0 message-flow">
                                        <div class="content at-top" id="messages">
                                            <div class="w7m89t0">
                                                <div class="w7m89tkm w7m89tn9 w7m89t0">
                                                    <div
                                                        class="w7m89txy w7m89tzr w7m89txe w7m89t0 w7m89trz w7m89t1d3 w7m89tha w7m89t115">
                                                        <div class="w7m89t0 iZd7r8O"></div>
                                                        <div class="w7m89t0 w7m89t115"><svg width="12" height="12"
                                                                viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"
                                                                fill="grey_1100">
                                                                <path
                                                                    d="m14.578 2.615-6-2.5a1.505 1.505 0 0 0-1.153 0l-6 2.5C.865 2.846.5 3.393.5 4c0 6.204 3.578 10.491 6.922 11.885.369.153.784.153 1.153 0 2.678-1.116 6.925-4.969 6.925-11.885a1.5 1.5 0 0 0-.922-1.384Zm-1.475 3.569-5.75 5.75a.502.502 0 0 1-.706 0l-3.25-3.25a.502.502 0 0 1 0-.706l.706-.707a.502.502 0 0 1 .706 0L7 9.462l4.69-4.69a.502.502 0 0 1 .707 0l.706.706a.496.496 0 0 1 0 .706Z">
                                                                </path>
                                                            </svg></div>
                                                        <p class="w7m89t20u w7m89t14w w7m89t133 w7m89t8 w7m89t2">WE
                                                            HAVE
                                                            YOUR BACK</p>
                                                        <div class="w7m89t0 iZd7r8O"></div>
                                                    </div>
                                                    <p
                                                        class="w7m89t20m w7m89t151 w7m89t138 w7m89t6 w7m89t2 w7m89tmk BAls3fh">
                                                        For added safety and your protection, keep payments and
                                                        communications within Fiverr.
                                                        <a class="w7m89t23e w7m89t23f w7m89t1yu w7m89t1yv w7m89t2"
                                                            target="_blank" href="#" rel="noopener noreferrer">
                                                            Learn more
                                                        </a>
                                                    </p>
                                                </div>
                                            </div>




                                            {{-- <div class="message-wrapper">
                                                <div id="d033cf0f-e119-1634-7f7f-7f7f7f7f7f7f_9e864310-7914-11ee-97c6-7d3cb85e153f"
                                                    class="message ">
                                                    <div class="w7m89t0 w7m89tca">
                                                        <div class="QwpljBX" data-testid="avatar"
                                                            style="border-radius: 50%;">
                                                            <figure class="XzsQBuC" title="im_zainmalik"
                                                                style="font-size: 32px; background-color: rgb(162, 63, 110);">
                                                                <figcaption class="wueBWNM">i</figcaption><img
                                                                    alt="im_zainmalik" class="vMVfoJD"
                                                                    src="https://fiverr-res.cloudinary.com/t_profile_original,q_auto,f_auto/attachments/profile/photo/c47d86a7d5f6e675441d20f6b54955ba-1615828739899/dd1ac782-09e9-4c1e-86ce-8cbbb7044a56.jfif"
                                                                    width="100%" role="img" loading="lazy">
                                                            </figure>
                                                        </div>
                                                    </div>
                                                    <div class="message-content">
                                                        <div class="header flex flex-justify-between">
                                                            <div class="header flex flex-items-center"><span
                                                                    class="sender">Me</span>
                                                                <div class="w7m89t0 w7m89tjx"
                                                                    data-testid="message-header-timestamp"><time>Nov
                                                                        02,
                                                                        2023,
                                                                        5:13
                                                                        AM</time></div>
                                                                <div></div>
                                                            </div>

                                                        </div><span class>
                                                            <div class>
                                                                <div>
                                                                    <div>
                                                                        <p class="message-body">Hi, this is testing 2</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </span><span class></span>
                                                    </div>
                                                </div>
                                            </div> --}}

                                            <div class="fiverr-message-wrapper"></div>
                                            <div id="autoscroll-anchor"></div>
                                        </div>

                                        <footer class="conversation-footer">
                                            <form method="post" id="message_form" enctype="multipart/form-data">
                                                <input type="hidden" id="token" value="{{ csrf_token() }}">
                                                <div class="message-box ">
                                                    <div class="message-uploader-container">
                                                        <div class="message-container">
                                                            <div class="textarea-container"
                                                                style="height: 24px; min-height: 28px; max-height: 192px;">
                                                                <textarea id="message-box-text-area" placeholder="Send message..." class="textarea-container"
                                                                    data-testid="message-box" aria-label="send message..." name="message"></textarea>
                                                                <span class="ruler">
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="message-action-bar">
                                                        <div class="flex flex-row flex-items-center">
                                                            <div class="yvFG0X6">
                                                                <button class="TRsfufn" onclick="getElementById('attachments').click();"><svg
                                                                        xmlns="http://www.w3.org/2000/svg" width="20"
                                                                        height="20" viewBox="0 0 17 16"
                                                                        fill="#74767E">
                                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                                            d="M8.2 1.485a6.515 6.515 0 1 0 0 13.03 6.515 6.515 0 0 0 0-13.03ZM.2 8a8 8 0 1 1 16 0 8 8 0 0 1-16 0Z">
                                                                        </path>
                                                                        <path
                                                                            d="M5.231 8a.99.99 0 1 0 0-1.98.99.99 0 0 0 0 1.98ZM11.17 8a.99.99 0 1 0 0-1.98.99.99 0 0 0 0 1.98Z">
                                                                        </path>
                                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                                            d="M6.22 9.237c.41 0 .743.332.743.742a1.237 1.237 0 0 0 2.474 0 .742.742 0 0 1 1.485 0 2.722 2.722 0 1 1-5.443 0c0-.41.332-.742.742-.742Z">
                                                                        </path>
                                                                    </svg>
                                                                </button>
                                                            </div>
                                                            <span class="yvFG0X6">
                                                                <div
                                                                    class="flex flex-center flex-items-center TRsfufn WqIVrQ2">
                                                                    <button class="TRsfufn" onclick="getElementById('attachments').click();"> 
                                                                    <input type="file" name="attachments" id="attachments"
                                                                        data-testid="upload-button" multiple hidden><svg
                                                                        xmlns="http://www.w3.org/2000/svg" width="20"
                                                                        height="20" viewBox="0 0 10 16"
                                                                        fill="#74767E">
                                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                                            d="M3.689 1.485A2.208 2.208 0 0 0 1.475 3.71v7.258A3.527 3.527 0 0 0 5 14.515a3.527 3.527 0 0 0 3.525-3.546V2.722c0-.41.33-.743.737-.743a.74.74 0 0 1 .738.743v8.247C10 13.754 7.768 16 5 16s-5-2.246-5-5.03V3.71A3.688 3.688 0 0 1 3.689 0a3.688 3.688 0 0 1 3.688 3.711v6.598A2.368 2.368 0 0 1 5 12.701a2.368 2.368 0 0 1-2.377-2.392V4.701c0-.41.33-.742.738-.742a.74.74 0 0 1 .737.742v5.608c0 .514.391.908.902.908.51 0 .902-.394.902-.908V3.711c0-1.24-.982-2.226-2.213-2.226Z">
                                                                        </path>
                                                                    </svg>
                                                                    </button>
                                                                </div>
                                                            </span>

                                                            <div class="jHG_6Wc dVTvdSS drop-shadow-z2"
                                                                style="position: absolute; top: 234px; left: 444px; max-width: 500px; background-color: rgb(255, 255, 255); z-index: 11500; opacity: 0; display: none;">
                                                            </div>
                                                            <span class="VfhnPLu"></span>


                                                        </div>
                                                        <span class="flex flex-items-center">
                                                            <div class="yvFG0X6">
                                                                <span class="yvFG0X6">
                                                                    <button
                                                                        class="sqTmH8M button-link toggle flex flex-items-center tbody-7"
                                                                        data-testid="toggle-user-settings-popover"
                                                                        type="submit">
                                                                        <span class="message-action green">Send</span>
                                                                    </button>
                                                                </span>
                                                            </div>

                                                        </span>

                                                    </div>
                                                </div>
                                            </form>
                                        </footer>

                                    </div>
                                </div>
                            </div>
                        </div>
                        @php
                            $orders = App\Models\Order::where('user_id',2)->get();
                            //     if($orders->count() > 0){
                            //          foreach ($orders as $order) { 
                            //             foreach(json_decode($order->cart)->items as $json_order){
                            //                     dd($json_order);
                            //                  foreach($json_order->item as $item_list){
                            //                     dd($item_list);
                            //                     $product_details = App\Models\Product::where($item_list)->first();
                            //                 }
                                           
                            //             }
                            //          }   
                            //     }
                            // foreach ($orders as $order) {  
                            //     $cart = json_decode($order->cart, true);
                            //     foreach ($cart['items'] as $product){
                            //         $product_details = App\Models\Product::where('id',$product['item']['id'])->first();
                            //         dd($product_details);
                            //     }
                            // }
                        @endphp
                        <div class="w7m89t0 w7m89t4i details-pane" data-testid="details-pane">
                            <div class="w7m89t0 w7m89thz">


                                <div class="w7m89t0 w7m89thz">
                                    <div class="NU7LAqm p-b-24">
                                        <div
                                            class="flex-between flex-items-baseline tbody-5 text-semi-bold co-text-darker">
                                            Orders with you<a class="tbody-6 VDmx6ji"
                                                href="/activities/search/conversation?act_search_query=amine_haddoud&amp;orders_only=true"
                                                target="_blank" rel="noopener noreferrer">Total
                                                (1)</a></div>
                                        <div class="EMv8VQD tbody-6 m-t-12" role="order-card">
                                            <div class="bmqYliz cf">
                                                <img class="yYW950_ m-r-8" src=" 6d2b2a562da1ee568f0b4fd0297a748f.png" alt="create and integrate custom live chat">
                                                <div class="text-semi-bold co-text-darker" role="amount">$70</div>
                                                <div class="uqU3FqO">
                                                    <p class="w7m89t1z2 w7m89t156 w7m89t13d w7m89t6 w7m89t2">Due
                                                        Nov 7,
                                                        2023
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="flex-between flex-items-center p-t-8"><a class="bUkfZdc tbody-6"
                                                    role="order-link"
                                                    href="/users/im_zainmalik/manage_orders/FO51781DC9983" target="_blank"
                                                    rel="noopener noreferrer">See
                                                    order</a><span class="pC6qPkc hic66ja kCnPlU1 IOdV8R9"
                                                    style="border-color: rgb(68, 110, 231); background-color: rgb(68, 110, 231); color: rgb(255, 255, 255);">In
                                                    Progress</span></div>
                                        </div>
                                    </div>
                                </div>

                                
                                <div class="MYCOWEK">
                                    <div class="zL3ei8s flex-items-baseline tbody-5 text-semi-bold co-text-darker m-b-8">
                                        About <a class="w7m89t23e w7m89t23f w7m89t1yu w7m89t1yv w7m89t2" target="_blank"
                                            href="/amine_haddoud?source=inbox" rel="noreferrer">amine_haddoud</a></div>
                                    <div class="w7m89tx9 w7m89t0 w7m89trz w7m89t1d3 w7m89t115">
                                        <div class="w7m89tys w7m89tzr w7m89txe w7m89t0 w7m89ts4 w7m89t1d3 w7m89t115">
                                            <p
                                                class="w7m89t20m w7m89t151 w7m89t138 w7m89t6 w7m89t2 w7m89t15q w7m89t16k w7m89t1d3 w7m89t9">
                                                From</p>
                                            <div class="w7m89t0 w7m89tk2">
                                                <p
                                                    class="w7m89t20u w7m89t151 w7m89t138 w7m89t7 w7m89t2 w7m89t15q w7m89t16k w7m89t1d3 w7m89t9">
                                                    Algeria</p>
                                            </div>
                                        </div>
                                        <div class="w7m89tys w7m89tzr w7m89txe w7m89t0 w7m89ts4 w7m89t1d3 w7m89t115">
                                            <p
                                                class="w7m89t20m w7m89t151 w7m89t138 w7m89t6 w7m89t2 w7m89t15q w7m89t16k w7m89t1d3 w7m89t9">
                                                On SahelSz since</p>
                                            <div class="w7m89t0 w7m89tk2">
                                                <p
                                                    class="w7m89t20u w7m89t151 w7m89t138 w7m89t7 w7m89t2 w7m89t15q w7m89t16k w7m89t1d3 w7m89t9">
                                                    Sep 2023</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w7m89tx9 w7m89t0 w7m89trz w7m89t1d3 w7m89t115">
                                        <div class="w7m89t0 w7m89tpc">
                                            <div class="w7m89tys w7m89tzr w7m89txe w7m89t0 w7m89ts4 w7m89t1d3 w7m89t115">
                                                <p
                                                    class="w7m89t20m w7m89t151 w7m89t138 w7m89t6 w7m89t2 w7m89t15q w7m89t16k w7m89t1d3 w7m89t9">
                                                    Rating</p>
                                                <div class="w7m89t0 w7m89tk2">
                                                    <div class="orca-rating color-black tbody-6">
                                                        <div class="stars"><span class="glAQDp5 orca-star"
                                                                aria-hidden="true" style="width: 15px; height: 15px;"><svg
                                                                    width="16" height="15" viewBox="0 0 16 15"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                                        d="M16 5.81285C16 5.98299 15.875 6.14367 15.75 6.26654L12.2596 9.61248L13.0865 14.3384C13.0962 14.4045 13.0962 14.4612 13.0962 14.5274C13.0962 14.7732 12.9808 15 12.7019 15C12.5673 15 12.4327 14.9527 12.3173 14.8866L8 12.656L3.68269 14.8866C3.55769 14.9527 3.43269 15 3.29808 15C3.01923 15 2.89423 14.7732 2.89423 14.5274C2.89423 14.4612 2.90385 14.4045 2.91346 14.3384L3.74038 9.61248L0.240385 6.26654C0.125 6.14367 0 5.98299 0 5.81285C0 5.5293 0.298077 5.41588 0.538462 5.37807L5.36539 4.68809L7.52885 0.387524C7.61539 0.207939 7.77885 0 8 0C8.22115 0 8.38462 0.207939 8.47115 0.387524L10.6346 4.68809L15.4615 5.37807C15.6923 5.41588 16 5.5293 16 5.81285Z">
                                                                    </path>
                                                                </svg></span></div><b class="rating-score">5</b><span
                                                            class="ratings-count clickable">(<span
                                                                class="rating-count-number">2</span>)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
        </div>
    </div>
    @includeIf('partials.global.common-footer')
@endsection

@section('script')
    <script src="https://www.gstatic.com/firebasejs/7.13.1/firebase-app.js"></script>
    <!-- If you enabled Analytics in your project, add the Firebase SDK for Analytics -->
    <script src="https://www.gstatic.com/firebasejs/7.13.1/firebase-analytics.js"></script>
    <!-- Add Firebase products that you want to use -->
    <script src="https://www.gstatic.com/firebasejs/7.13.1/firebase-auth.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.13.1/firebase-database.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.13.1/firebase-firestore.js"></script>
    @php
        $pro_id = Session::get('pro_id');
    @endphp
    <script>
        // Add record
        $('#message_form').submit(function(e) {
            e.preventDefault();
            var form = new FormData(document.getElementById('message_form'));
            var token = $('#token').val();
            form.append('_token', token);
            $.ajax({
                url: '{{ route('chat.send_message', [$id, 'pro_id' => $pro_id]) }}',
                type: 'post',
                data: form,
                cache: false,
                contentType: false, //must, tell jQuery not to process the data
                processData: false,
                success: function(response) {
                    document.getElementById("message_form").reset();
                }
            });
        });
    </script>

    <script>
        const firebaseConfig = {
            apiKey: "AIzaSyDR4JWY3crrXkUyMAKUPuuIN75Tsls_h-M",
            authDomain: "sensoreapp.firebaseapp.com",
            databaseURL: "https://sensoreapp-default-rtdb.firebaseio.com",
            projectId: "sensoreapp",
            storageBucket: "sensoreapp.appspot.com",
            messagingSenderId: "602583096843",
            appId: "1:602583096843:web:d126fab043603c5fba710e",
            measurementId: "G-LT4HLMKMLV"
        };
        firebase.initializeApp(firebaseConfig);
        firebase.analytics();

        var reff = firebase.database().ref("messages_{{ $id }}/messages");
        reff.on('child_added', function(snapshot) {

            var AuthName = '{{ auth()->user()->id }}'
            var myname = "{{ Auth::user()->id }}";
            var name = (myname == snapshot.val().user_id) ? myname : snapshot.val().user_id;

            var block =
                '<div class="message-wrapper"><div id="d033cf0f-e119-1634-7f7f-7f7f7f7f7f7f_ff0f9e90-7912-11ee-96e0-292b0a7e0cfc" class="message"><div class="w7m89t0 w7m89tca"><button class="QwpljBX" data-testid="avatar" style="border-radius: 50%;"><figure class="XzsQBuC" title="{{ $seller_details->name }}"> <img alt="{{ $seller_details->name }}" class="vMVfoJD" src="{{ asset("assets/images") }}/{{ $seller_details->photo }}" width="100%" role="img" loading="lazy"></figure></button></div><div class="message-content"><div class="header flex flex-justify-between"><div class="header flex flex-items-center"><span class="sender" data-testid="basic-message-header">{{ $seller_details->name }}</span> <div class="w7m89t0 w7m89tjx" data-testid="message-header-timestamp"> <time>' +snapshot.val().date + '</time> </div> <div></div> </div></div><span class><div class><div><div><p class="message-body">' +snapshot.val().text + '</p></div>';

            if (snapshot.val().pro_id != 0) {
                  block += '<div class="related-to"> <h3>This message relates to:</h3> <a href="' +snapshot.val().pro_url+ '" target="_blank" rel="noopener noreferrer"><img src="' + snapshot.val().user_image_url + '"><div class="text-wrapper"> <p> ' + snapshot.val().pro_title +' </p> </div> </a> </div>';
            }
             block += ' </div> ';
            
             if (snapshot.val().has_file != 0) {

                block += '<br><a href="'+snapshot.val().file+'"><img src="{{ asset("chat_assets/documents.png") }}" style="width:60px;"/><br> 1 File</a></div> </span><span class></span> </div> </div></div>';
             }
 

            $("#messages").append(block);
            // window.scrollTo(0, document.body.scrollHeight);
        });
    </script>
@endsection
<br>
