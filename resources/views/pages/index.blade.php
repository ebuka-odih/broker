@extends('pages.layout.app')
@section('content')
    <style>
        @media (max-width: 767px) {
            .elementor-6 .elementor-element.elementor-element-93685ed img {
                width: 1000px;
                max-width: 374px;
                margin-left: 60px;
            }
        }

        .coinPriceBlock-container {
            overflow-x: scroll;
            overflow-y: hidden;
            white-space: nowrap;
            padding: 10px 10px;
            box-sizing: border-box;
            min-height: 174px;


            /* Flexbox styles to center content */
            display: flex;
            justify-content: center; /* Horizontally center */
            align-items: center; /* Vertically center */
        }

    </style>

<div data-elementor-type="wp-page" data-elementor-id="6" class="elementor elementor-6" data-elementor-post-type="page">
    <section style="margin-bottom: 50px"
        class="elementor-section elementor-top-section elementor-element elementor-element-b63fbaf elementor-section-height-min-height elementor-section-boxed elementor-section-height-default elementor-section-items-middle"
        data-id="b63fbaf" data-element_type="section"
        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
        <div class="elementor-background-overlay"></div>
        <div class="elementor-container elementor-column-gap-default">
            <div
                class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-be0fa84"
                data-id="be0fa84" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div
                        class="elementor-element elementor-element-d2f17fb elementor-invisible elementor-widget elementor-widget-heading"
                        data-id="d2f17fb" data-element_type="widget"
                        data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;,&quot;_animation_delay&quot;:200}"
                        data-widget_type="heading.default">
                        <div class="elementor-widget-container">
                            <style>/*! elementor - v3.23.0 - 05-08-2024 */
                                .elementor-heading-title {
                                    padding: 0;
                                    margin: 0;
                                    line-height: 1
                                }

                                .elementor-widget-heading .elementor-heading-title[class*=elementor-size-] > a {
                                    color: inherit;
                                    font-size: inherit;
                                    line-height: inherit
                                }

                                .elementor-widget-heading .elementor-heading-title.elementor-size-small {
                                    font-size: 15px
                                }

                                .elementor-widget-heading .elementor-heading-title.elementor-size-medium {
                                    font-size: 19px
                                }

                                .elementor-widget-heading .elementor-heading-title.elementor-size-large {
                                    font-size: 29px
                                }

                                .elementor-widget-heading .elementor-heading-title.elementor-size-xl {
                                    font-size: 39px
                                }

                                .elementor-widget-heading .elementor-heading-title.elementor-size-xxl {
                                    font-size: 59px
                                }</style>
                            <h1 class="elementor-heading-title elementor-size-default">Trade crypto.</h1></div>
                    </div>
                    <div
                        class="elementor-element elementor-element-f5bc79d elementor-invisible elementor-widget elementor-widget-heading"
                        data-id="f5bc79d" data-element_type="widget"
                        data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;,&quot;_animation_delay&quot;:400}"
                        data-widget_type="heading.default">
                        <div class="elementor-widget-container">
                            <h1 class="elementor-heading-title elementor-size-default">Anytime, Anywhere.</h1></div>
                    </div>
                    <div
                        class="elementor-element elementor-element-06a5288 elementor-invisible elementor-widget elementor-widget-heading"
                        data-id="06a5288" data-element_type="widget"
                        data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;,&quot;_animation_delay&quot;:600}"
                        data-widget_type="heading.default">
                        <div class="elementor-widget-container">
                            <h5 class="elementor-heading-title elementor-size-default">
                               Choose from over 500 spot pairs with maker fees starting at 0.0%, enjoy advanced charting capabilities powered by TradingView, and leverage robust APIs.
                            </h5></div>
                    </div>
                    <div
                        class="elementor-element elementor-element-deafccb elementor-invisible elementor-widget elementor-widget-button"
                        data-id="deafccb" data-element_type="widget"
                        data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;,&quot;_animation_delay&quot;:800}"
                        data-widget_type="button.default">
                        <div class="elementor-widget-container">
                            <div class="elementor-button-wrapper">
                                <a class="elementor-button elementor-button-link elementor-size-sm" href="{{ route('register') }}">
						<span class="elementor-button-content-wrapper">
									<span class="elementor-button-text">Get Started</span>
					</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div
                class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-a6d8c60"
                data-id="a6d8c60" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div
                        class="elementor-element elementor-element-e03dc75 elementor-invisible elementor-widget elementor-widget-image"
                        data-id="e03dc75" data-element_type="widget"
                        data-settings="{&quot;motion_fx_motion_fx_mouse&quot;:&quot;yes&quot;,&quot;motion_fx_mouseTrack_effect&quot;:&quot;yes&quot;,&quot;motion_fx_mouseTrack_speed&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0.20000000000000001,&quot;sizes&quot;:[]},&quot;_animation&quot;:&quot;fadeIn&quot;,&quot;_animation_delay&quot;:200}"
                        data-widget_type="image.default">
                        <div class="elementor-widget-container">
                            <img decoding="async" width="399" height="403"
                                 src="wp-content/uploads/sites/5/2021/07/Group-654%402x.png"
                                 class="attachment-large size-large wp-image-119" alt=""
                                 srcset="https://demo2.strongtheme.com/coinone/wp-content/uploads/sites/5/2021/07/Group-654@2x.png 399w, https://demo2.strongtheme.com/coinone/wp-content/uploads/sites/5/2021/07/Group-654@2x-297x300.png 297w"
                                 sizes="(max-width: 399px) 100vw, 399px"/></div>
                    </div>
                    <div
                        class="elementor-element elementor-element-93685ed elementor-invisible elementor-widget elementor-widget-image"
                        data-id="93685ed" data-element_type="widget"
                        data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;,&quot;_animation_delay&quot;:400}"
                        data-widget_type="image.default">
                        <div class="elementor-widget-container">
                            <img width="800" height="775" src="{{ asset('img/hero_3x_B.webp') }}"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section
        class="elementor-section elementor-top-section elementor-element elementor-element-b30fbaa elementor-section-boxed elementor-section-height-default elementor-section-height-default"
        data-id="b30fbaa" data-element_type="section">
        <div  class="elementor-container elementor-column-gap-default">
            <div
                class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-fadb85a elementor-invisible"
                data-id="fadb85a" data-element_type="column"
                data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeIn&quot;,&quot;animation_delay&quot;:200}">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-background-overlay"></div>
                    <section
                        class="elementor-section elementor-inner-section elementor-element elementor-element-c33f4f9 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                        data-id="c33f4f9" data-element_type="section">
                        <div class="elementor-container elementor-column-gap-default">
                            <div
                                class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-9c37018"
                                data-id="9c37018" data-element_type="column">
                                <div class="elementor-widget-wrap">
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            <div
                class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-6c8ddc5 elementor-invisible"
                data-id="6c8ddc5" data-element_type="column"
                data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeIn&quot;,&quot;animation_delay&quot;:200}">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-background-overlay"></div>
                    <section
                        class="elementor-section elementor-inner-section elementor-element elementor-element-e68afd8 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                        data-id="e68afd8" data-element_type="section">
                        <div class="elementor-container elementor-column-gap-default">
                            <div
                                class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-dd33d6a"
                                data-id="dd33d6a" data-element_type="column">
                                <div class="elementor-widget-wrap">
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            <div
                class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-6c2c6d1 elementor-invisible"
                data-id="6c2c6d1" data-element_type="column"
                data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeIn&quot;,&quot;animation_delay&quot;:200}">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-background-overlay"></div>
                    <section
                        class="elementor-section elementor-inner-section elementor-element elementor-element-881e7be elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                        data-id="881e7be" data-element_type="section">
                        <div class="elementor-container elementor-column-gap-default">
                            <div
                                class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-62fb430"
                                data-id="62fb430" data-element_type="column">
                                <div class="elementor-widget-wrap">
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="https://files.coinmarketcap.com/static/widget/coinPriceBlock.js"></script><div id="coinmarketcap-widget-coin-price-block" coins="1,1027,825,5426,1839,3408,52,1958" currency="USD" theme="light" transparent="false" show-symbol-logo="true"></div>
    </section>
    <section
        class="elementor-section elementor-top-section elementor-element elementor-element-8e33f15 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
        data-id="8e33f15" data-element_type="section">
        <div class="elementor-container elementor-column-gap-default">
            <div
                class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-a4efbc9"
                data-id="a4efbc9" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-351838d elementor-widget elementor-widget-heading"
                         data-id="351838d" data-element_type="widget" data-widget_type="heading.default">
                        <div class="elementor-widget-container">
                            <h3 class="elementor-heading-title elementor-size-default">Zero trading fees, more rewards</h3>
                        </div>
                    </div>
                    <div
                        class="elementor-element elementor-element-cee0870 elementor-widget elementor-widget-text-editor"
                        data-id="cee0870" data-element_type="widget" data-widget_type="text-editor.default">
                        <div class="elementor-widget-container">
                            <style>/*! elementor - v3.23.0 - 05-08-2024 */
                                .elementor-widget-text-editor.elementor-drop-cap-view-stacked .elementor-drop-cap {
                                    background-color: #69727d;
                                    color: #fff
                                }

                                .elementor-widget-text-editor.elementor-drop-cap-view-framed .elementor-drop-cap {
                                    color: #69727d;
                                    border: 3px solid;
                                    background-color: transparent
                                }

                                .elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap {
                                    margin-top: 8px
                                }

                                .elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap-letter {
                                    width: 1em;
                                    height: 1em
                                }

                                .elementor-widget-text-editor .elementor-drop-cap {
                                    float: left;
                                    text-align: center;
                                    line-height: 1;
                                    font-size: 50px
                                }

                                .elementor-widget-text-editor .elementor-drop-cap-letter {
                                    display: inline-block
                                }</style>
                            <p>Maximize your crypto experience with an all-in-one membership: enjoy zero trading fees, enhanced rewards, priority support, and more.
                            </p></div>
                    </div>
                    <div
                        class="elementor-element elementor-element-6f99068 elementor-invisible elementor-widget elementor-widget-button"
                        data-id="6f99068" data-element_type="widget"
                        data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;,&quot;_animation_delay&quot;:800}"
                        data-widget_type="button.default">
                        <div class="elementor-widget-container">
                            <div class="elementor-button-wrapper">
                                <a class="elementor-button elementor-button-link elementor-size-sm" href="{{ route('register') }}">
						<span class="elementor-button-content-wrapper">
									<span class="elementor-button-text">Start Trading</span>
					</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div
                class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-48d5339"
                data-id="48d5339" data-element_type="column">
                <div class="elementor-widget-wrap">
                </div>
            </div>
        </div>
    </section>
    <section
        class="elementor-section elementor-top-section elementor-element elementor-element-72297b4 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
        data-id="72297b4" data-element_type="section">
        <div class="elementor-container elementor-column-gap-default">
            <div
                class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-3a79e10"
                data-id="3a79e10" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div
                        class="elementor-element elementor-element-3cd3267 elementor-invisible elementor-widget elementor-widget-heading"
                        data-id="3cd3267" data-element_type="widget"
                        data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:200}"
                        data-widget_type="heading.default">
                        <div class="elementor-widget-container">
                            <h2 class="elementor-heading-title elementor-size-default">Explore the crypto world with {{ env('APP_NAME') }}</h2></div>
                    </div>
                    <section
                        class="elementor-section elementor-inner-section elementor-element elementor-element-ef38b02 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                        data-id="ef38b02" data-element_type="section">
                        <div class="elementor-container elementor-column-gap-default">
                            <div
                                class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-7dadf13 elementor-invisible"
                                data-id="7dadf13" data-element_type="column"
                                data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeIn&quot;,&quot;animation_delay&quot;:200}">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-background-overlay"></div>
                                    <div
                                        class="elementor-element elementor-element-668067d elementor-position-left elementor-vertical-align-bottom elementor-widget elementor-widget-image-box"
                                        data-id="668067d" data-element_type="widget"
                                        data-widget_type="image-box.default">
                                        <div class="elementor-widget-container">
                                            <style>/*! elementor - v3.23.0 - 05-08-2024 */
                                                .elementor-widget-image-box .elementor-image-box-content {
                                                    width: 100%
                                                }

                                                @media (min-width: 768px) {
                                                    .elementor-widget-image-box.elementor-position-left .elementor-image-box-wrapper, .elementor-widget-image-box.elementor-position-right .elementor-image-box-wrapper {
                                                        display: flex
                                                    }

                                                    .elementor-widget-image-box.elementor-position-right .elementor-image-box-wrapper {
                                                        text-align: end;
                                                        flex-direction: row-reverse
                                                    }

                                                    .elementor-widget-image-box.elementor-position-left .elementor-image-box-wrapper {
                                                        text-align: start;
                                                        flex-direction: row
                                                    }

                                                    .elementor-widget-image-box.elementor-position-top .elementor-image-box-img {
                                                        margin: auto
                                                    }

                                                    .elementor-widget-image-box.elementor-vertical-align-top .elementor-image-box-wrapper {
                                                        align-items: flex-start
                                                    }

                                                    .elementor-widget-image-box.elementor-vertical-align-middle .elementor-image-box-wrapper {
                                                        align-items: center
                                                    }

                                                    .elementor-widget-image-box.elementor-vertical-align-bottom .elementor-image-box-wrapper {
                                                        align-items: flex-end
                                                    }
                                                }

                                                @media (max-width: 767px) {
                                                    .elementor-widget-image-box .elementor-image-box-img {
                                                        margin-left: auto !important;
                                                        margin-right: auto !important;
                                                        margin-bottom: 15px
                                                    }
                                                }

                                                .elementor-widget-image-box .elementor-image-box-img {
                                                    display: inline-block
                                                }

                                                .elementor-widget-image-box .elementor-image-box-title a {
                                                    color: inherit
                                                }

                                                .elementor-widget-image-box .elementor-image-box-wrapper {
                                                    text-align: center
                                                }

                                                .elementor-widget-image-box .elementor-image-box-description {
                                                    margin: 0
                                                }</style>
                                            <div class="elementor-image-box-wrapper">
                                                <figure class="elementor-image-box-img"><img loading="lazy"
                                                                                             decoding="async"
                                                                                             width="512" height="512"
                                                                                             src="wp-content/uploads/sites/5/2021/07/Cards.png"
                                                                                             class="attachment-full size-full wp-image-238"
                                                                                             alt=""
                                                                                             srcset="https://demo2.strongtheme.com/coinone/wp-content/uploads/sites/5/2021/07/Cards.png 512w, https://demo2.strongtheme.com/coinone/wp-content/uploads/sites/5/2021/07/Cards-300x300.png 300w, https://demo2.strongtheme.com/coinone/wp-content/uploads/sites/5/2021/07/Cards-150x150.png 150w"
                                                                                             sizes="(max-width: 512px) 100vw, 512px"/>
                                                </figure>
                                                <div class="elementor-image-box-content"><h3
                                                        class="elementor-image-box-title">We hold customer assets 1:1</h3>
                                                    <p class="elementor-image-box-description">Access your crypto anytime, anywhere.
                                                    </p></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-39bba48 elementor-invisible"
                                data-id="39bba48" data-element_type="column"
                                data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeIn&quot;,&quot;animation_delay&quot;:400}">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-background-overlay"></div>
                                    <div
                                        class="elementor-element elementor-element-f454171 elementor-position-left elementor-vertical-align-bottom elementor-widget elementor-widget-image-box"
                                        data-id="f454171" data-element_type="widget"
                                        data-widget_type="image-box.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-image-box-wrapper">
                                                <figure class="elementor-image-box-img"><img loading="lazy"
                                                                                             decoding="async"
                                                                                             width="512" height="512"
                                                                                             src="wp-content/uploads/sites/5/2021/07/Select.png"
                                                                                             class="attachment-full size-full wp-image-234"

                                                                                             sizes="(max-width: 512px) 100vw, 512px"/>
                                                </figure>
                                                <div class="elementor-image-box-content"><h3
                                                        class="elementor-image-box-title">Explore derivatives</h3>
                                                    <p class="elementor-image-box-description">
                                                        Trade derivatives, built for the retail investor.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-cd57fa5 elementor-hidden-tablet elementor-invisible"
                                data-id="cd57fa5" data-element_type="column"
                                data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeIn&quot;,&quot;animation_delay&quot;:600}">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-background-overlay"></div>
                                    <div
                                        class="elementor-element elementor-element-77876f5 elementor-position-left elementor-vertical-align-bottom elementor-widget elementor-widget-image-box"
                                        data-id="77876f5" data-element_type="widget"
                                        data-widget_type="image-box.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-image-box-wrapper">
                                                <figure class="elementor-image-box-img"><img loading="lazy"
                                                                                             decoding="async"
                                                                                             width="512" height="512"
                                                                                             src="wp-content/uploads/sites/5/2021/07/Safety.png"
                                                                                             class="attachment-full size-full wp-image-250"
                                                                                             alt=""
                                                                                             srcset="https://demo2.strongtheme.com/coinone/wp-content/uploads/sites/5/2021/07/Safety.png 512w, https://demo2.strongtheme.com/coinone/wp-content/uploads/sites/5/2021/07/Safety-300x300.png 300w, https://demo2.strongtheme.com/coinone/wp-content/uploads/sites/5/2021/07/Safety-150x150.png 150w"
                                                                                             sizes="(max-width: 512px) 100vw, 512px"/>
                                                </figure>
                                                <div class="elementor-image-box-content"><h3
                                                        class="elementor-image-box-title">24 Hours Security</h3>
                                                    <p class="elementor-image-box-description">State-of-the-art security and multifaceted risk management programs</p></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>
    <section
        class="elementor-section elementor-top-section elementor-element elementor-element-38deae4 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
        data-id="38deae4" data-element_type="section">
        <div class="elementor-background-overlay"></div>
        <div class="elementor-container elementor-column-gap-default">
            <div
                class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-6172c17"
                data-id="6172c17" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-c1bcbb8 elementor-widget elementor-widget-heading"
                         data-id="c1bcbb8" data-element_type="widget" data-widget_type="heading.default">
                        <div class="elementor-widget-container">
                            <h2 class="elementor-heading-title elementor-size-default">ADVANCED</h2></div>
                    </div>
                    <div class="elementor-element elementor-element-d183fc9 elementor-widget elementor-widget-heading"
                         data-id="d183fc9" data-element_type="widget" data-widget_type="heading.default">
                        <div class="elementor-widget-container">
                            <h2 class="elementor-heading-title elementor-size-default">POWERFUL TOOLS</h2></div>
                    </div>
                    <div
                        class="elementor-element elementor-element-9557597 elementor-widget elementor-widget-text-editor"
                        data-id="9557597" data-element_type="widget" data-widget_type="text-editor.default">
                        <div class="elementor-widget-container">
                            <p>Designed for the advanced trader, Powerful analytical tools with the safety and security of Coincachex deliver the ultimate trading experience. Tap into sophisticated charting capabilities, real-time order books, and deep liquidity across hundreds of markets.</p></div>
                    </div>
                    <div class="elementor-element elementor-element-ea3e871 elementor-widget elementor-widget-heading"
                         data-id="ea3e871" data-element_type="widget" data-widget_type="heading.default">
                        <div class="elementor-widget-container">
                            <h6 class="elementor-heading-title elementor-size-default">Download our platform on </h6>
                        </div>
                    </div>
                    <section
                        class="elementor-section elementor-inner-section elementor-element elementor-element-c019f0f elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                        data-id="c019f0f" data-element_type="section">
                        <div class="elementor-container elementor-column-gap-default">
                            <div
                                class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-31af91a"
                                data-id="31af91a" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div
                                        class="elementor-element elementor-element-59a2e34 elementor-widget elementor-widget-image"
                                        data-id="59a2e34" data-element_type="widget" data-widget_type="image.default">
                                        <div class="elementor-widget-container">
                                            <img loading="lazy" decoding="async" width="592" height="175"
                                                 src="wp-content/uploads/sites/5/2021/07/coinonehome010.png"
                                                 class="elementor-animation-shrink attachment-large size-large wp-image-332"
                                                 alt=""
                                                 srcset="https://demo2.strongtheme.com/coinone/wp-content/uploads/sites/5/2021/07/coinonehome010.png 592w, https://demo2.strongtheme.com/coinone/wp-content/uploads/sites/5/2021/07/coinonehome010-300x89.png 300w"
                                                 sizes="(max-width: 592px) 100vw, 592px"/></div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-a97004b"
                                data-id="a97004b" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div
                                        class="elementor-element elementor-element-a4a2195 elementor-widget elementor-widget-image"
                                        data-id="a4a2195" data-element_type="widget" data-widget_type="image.default">
                                        <div class="elementor-widget-container">
                                            <img loading="lazy" decoding="async" width="592" height="175"
                                                 src="wp-content/uploads/sites/5/2021/07/coinonehome09.png"
                                                 class="elementor-animation-shrink attachment-large size-large wp-image-331"
                                                 alt=""
                                                 srcset="https://demo2.strongtheme.com/coinone/wp-content/uploads/sites/5/2021/07/coinonehome09.png 592w, https://demo2.strongtheme.com/coinone/wp-content/uploads/sites/5/2021/07/coinonehome09-300x89.png 300w"
                                                 sizes="(max-width: 592px) 100vw, 592px"/></div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-5f2e5fe"
                                data-id="5f2e5fe" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div
                                        class="elementor-element elementor-element-02a4447 elementor-widget elementor-widget-image"
                                        data-id="02a4447" data-element_type="widget" data-widget_type="image.default">
                                        <div class="elementor-widget-container">
                                            <img loading="lazy" decoding="async" width="234" height="68"
                                                 src="wp-content/uploads/sites/5/2021/07/coinonehome011.png"
                                                 class="elementor-animation-shrink attachment-large size-large wp-image-336"
                                                 alt=""/></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            <div
                class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-34cff6d"
                data-id="34cff6d" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-face4bc elementor-widget elementor-widget-image"
                         data-id="face4bc" data-element_type="widget" data-widget_type="image.default">
                        <div class="elementor-widget-container">
                            <img loading="lazy" decoding="async" width="800" height="545" src="{{ asset('img/4.png') }}"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section
        class="elementor-section elementor-top-section elementor-element elementor-element-3ef3e61 elementor-section-height-min-height elementor-section-boxed elementor-section-height-default elementor-section-items-middle"
        data-id="3ef3e61" data-element_type="section"
        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
        <div class="elementor-background-overlay"></div>
        <div class="elementor-container elementor-column-gap-default">
            <div
                class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-0a2bed7"
                data-id="0a2bed7" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div
                        class="elementor-element elementor-element-1a1e3e6 elementor--h-position-left elementor--v-position-middle elementor-pagination-position-inside elementor-widget elementor-widget-slides"
                        data-id="1a1e3e6" data-element_type="widget"
                        data-settings="{&quot;navigation&quot;:&quot;dots&quot;,&quot;autoplay_speed&quot;:4000,&quot;autoplay&quot;:&quot;yes&quot;,&quot;pause_on_hover&quot;:&quot;yes&quot;,&quot;pause_on_interaction&quot;:&quot;yes&quot;,&quot;infinite&quot;:&quot;yes&quot;,&quot;transition&quot;:&quot;slide&quot;,&quot;transition_speed&quot;:500}"
                        data-widget_type="slides.default">
                        <div class="elementor-widget-container">
                            <style>/*! elementor-pro - v3.19.0 - 29-01-2024 */
                                .elementor-slides .swiper-slide-bg {
                                    background-size: cover;
                                    background-position: 50%;
                                    background-repeat: no-repeat;
                                    min-width: 100%;
                                    min-height: 100%
                                }

                                .elementor-slides .swiper-slide-inner {
                                    background-repeat: no-repeat;
                                    background-position: 50%;
                                    position: absolute;
                                    top: 0;
                                    left: 0;
                                    bottom: 0;
                                    right: 0;
                                    padding: 50px;
                                    margin: auto
                                }

                                .elementor-slides .swiper-slide-inner, .elementor-slides .swiper-slide-inner:hover {
                                    color: #fff;
                                    display: flex
                                }

                                .elementor-slides .swiper-slide-inner .elementor-background-overlay {
                                    position: absolute;
                                    z-index: 0;
                                    top: 0;
                                    bottom: 0;
                                    left: 0;
                                    right: 0
                                }

                                .elementor-slides .swiper-slide-inner .elementor-slide-content {
                                    position: relative;
                                    z-index: 1;
                                    width: 100%
                                }

                                .elementor-slides .swiper-slide-inner .elementor-slide-heading {
                                    font-size: 35px;
                                    font-weight: 700;
                                    line-height: 1
                                }

                                .elementor-slides .swiper-slide-inner .elementor-slide-description {
                                    font-size: 17px;
                                    line-height: 1.4
                                }

                                .elementor-slides .swiper-slide-inner .elementor-slide-description:not(:last-child), .elementor-slides .swiper-slide-inner .elementor-slide-heading:not(:last-child) {
                                    margin-bottom: 30px
                                }

                                .elementor-slides .swiper-slide-inner .elementor-slide-button {
                                    border: 2px solid #fff;
                                    color: #fff;
                                    background: transparent;
                                    display: inline-block
                                }

                                .elementor-slides .swiper-slide-inner .elementor-slide-button, .elementor-slides .swiper-slide-inner .elementor-slide-button:hover {
                                    background: transparent;
                                    color: inherit;
                                    text-decoration: none
                                }

                                .elementor--v-position-top .swiper-slide-inner {
                                    align-items: flex-start
                                }

                                .elementor--v-position-bottom .swiper-slide-inner {
                                    align-items: flex-end
                                }

                                .elementor--v-position-middle .swiper-slide-inner {
                                    align-items: center
                                }

                                .elementor--h-position-left .swiper-slide-inner {
                                    justify-content: flex-start
                                }

                                .elementor--h-position-right .swiper-slide-inner {
                                    justify-content: flex-end
                                }

                                .elementor--h-position-center .swiper-slide-inner {
                                    justify-content: center
                                }

                                body.rtl .elementor-widget-slides .elementor-swiper-button-next {
                                    left: 10px;
                                    right: auto
                                }

                                body.rtl .elementor-widget-slides .elementor-swiper-button-prev {
                                    right: 10px;
                                    left: auto
                                }

                                .elementor-slides-wrapper div:not(.swiper-slide) > .swiper-slide-inner {
                                    display: none
                                }

                                @media (max-width: 767px) {
                                    .elementor-slides .swiper-slide-inner {
                                        padding: 30px
                                    }

                                    .elementor-slides .swiper-slide-inner .elementor-slide-heading {
                                        font-size: 23px;
                                        line-height: 1;
                                        margin-bottom: 15px
                                    }

                                    .elementor-slides .swiper-slide-inner .elementor-slide-description {
                                        font-size: 13px;
                                        line-height: 1.4;
                                        margin-bottom: 15px
                                    }
                                }</style>
                            <div class="elementor-swiper">
                                <div class="elementor-slides-wrapper elementor-main-swiper swiper" dir="ltr"
                                     data-animation="fadeInUp">
                                    <div class="swiper-wrapper elementor-slides">
                                        <div class="elementor-repeater-item-707fc82 swiper-slide">
                                            <div class="swiper-slide-bg" role="img"></div>
                                            <div class="swiper-slide-inner">
                                                <div class="swiper-slide-contents"></div>
                                            </div>
                                        </div>
                                        <div class="elementor-repeater-item-1b4bfeb swiper-slide">
                                            <div class="swiper-slide-bg" role="img"></div>
                                            <div class="swiper-slide-inner">
                                                <div class="swiper-slide-contents"></div>
                                            </div>
                                        </div>
                                        <div class="elementor-repeater-item-aeaec7e swiper-slide">
                                            <div class="swiper-slide-bg" role="img"></div>
                                            <div class="swiper-slide-inner">
                                                <div class="swiper-slide-contents"></div>
                                            </div>
                                        </div>
                                        <div class="elementor-repeater-item-d2e04e3 swiper-slide">
                                            <div class="swiper-slide-bg" role="img"></div>
                                            <div class="swiper-slide-inner">
                                                <div class="swiper-slide-contents"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-pagination"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div
                class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-99e6575"
                data-id="99e6575" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-be6d41b elementor-widget elementor-widget-heading"
                         data-id="be6d41b" data-element_type="widget" data-widget_type="heading.default">
                        <div class="elementor-widget-container">
                            <h2 class="elementor-heading-title elementor-size-default">Manage your </h2></div>
                    </div>
                    <div class="elementor-element elementor-element-0acfef2 elementor-widget elementor-widget-heading"
                         data-id="0acfef2" data-element_type="widget" data-widget_type="heading.default">
                        <div class="elementor-widget-container">
                            <h2 class="elementor-heading-title elementor-size-default">cryptocurrency</h2></div>
                    </div>
                    <div
                        class="elementor-element elementor-element-e7a350a elementor-widget elementor-widget-text-editor"
                        data-id="e7a350a" data-element_type="widget" data-widget_type="text-editor.default">
                        <div class="elementor-widget-container">
                            <p>Thousands of assets in the palm of your hand Powering 10,000 transactions per second In-depth market analysis</p></div>
                    </div>
                    <div
                        class="elementor-element elementor-element-86544f1 elementor-widget elementor-widget-price-list"
                        data-id="86544f1" data-element_type="widget" data-widget_type="price-list.default">
                        <div class="elementor-widget-container">
                            <style>/*! elementor-pro - v3.19.0 - 29-01-2024 */
                                .elementor-widget-price-list .elementor-price-list {
                                    list-style: none;
                                    padding: 0;
                                    margin: 0
                                }

                                .elementor-widget-price-list .elementor-price-list li {
                                    margin: 0
                                }

                                .elementor-price-list li:not(:last-child) {
                                    margin-bottom: 20px
                                }

                                .elementor-price-list .elementor-price-list-image {
                                    max-width: 50%;
                                    flex-shrink: 0;
                                    padding-right: 25px
                                }

                                .elementor-price-list .elementor-price-list-image img {
                                    width: 100%
                                }

                                .elementor-price-list .elementor-price-list-header, .elementor-price-list .elementor-price-list-item, .elementor-price-list .elementor-price-list-text {
                                    display: flex
                                }

                                .elementor-price-list .elementor-price-list-item {
                                    align-items: flex-start
                                }

                                .elementor-price-list .elementor-price-list-item .elementor-price-list-text {
                                    align-items: flex-start;
                                    flex-wrap: wrap;
                                    flex-grow: 1
                                }

                                .elementor-price-list .elementor-price-list-item .elementor-price-list-header {
                                    align-items: center;
                                    flex-basis: 100%;
                                    font-size: 19px;
                                    font-weight: 600;
                                    margin-bottom: 10px;
                                    justify-content: space-between
                                }

                                .elementor-price-list .elementor-price-list-item .elementor-price-list-title {
                                    max-width: 80%
                                }

                                .elementor-price-list .elementor-price-list-item .elementor-price-list-price {
                                    font-weight: 600
                                }

                                .elementor-price-list .elementor-price-list-item p.elementor-price-list-description {
                                    flex-basis: 100%;
                                    font-size: 14px;
                                    margin: 0
                                }

                                .elementor-price-list .elementor-price-list-item .elementor-price-list-separator {
                                    flex-grow: 1;
                                    margin-left: 10px;
                                    margin-right: 10px;
                                    border-bottom-style: dotted;
                                    border-bottom-width: 2px;
                                    height: 0
                                }

                                .elementor-price-table {
                                    text-align: center
                                }

                                .elementor-price-table .elementor-price-table__header {
                                    background: var(--e-price-table-header-background-color, #555);
                                    padding: 20px 0
                                }

                                .elementor-price-table .elementor-price-table__heading {
                                    margin: 0;
                                    padding: 0;
                                    line-height: 1.2;
                                    font-size: 24px;
                                    font-weight: 600;
                                    color: #fff
                                }

                                .elementor-price-table .elementor-price-table__subheading {
                                    font-size: 13px;
                                    font-weight: 400;
                                    color: #fff
                                }

                                .elementor-price-table .elementor-price-table__original-price {
                                    margin-right: 15px;
                                    text-decoration: line-through;
                                    font-size: .5em;
                                    line-height: 1;
                                    font-weight: 400;
                                    align-self: center
                                }

                                .elementor-price-table .elementor-price-table__original-price .elementor-price-table__currency {
                                    font-size: 1em;
                                    margin: 0
                                }

                                .elementor-price-table .elementor-price-table__price {
                                    display: flex;
                                    justify-content: center;
                                    align-items: center;
                                    flex-wrap: wrap;
                                    flex-direction: row;
                                    color: #555;
                                    font-weight: 800;
                                    font-size: 65px;
                                    padding: 40px 0
                                }

                                .elementor-price-table .elementor-price-table__price .elementor-typo-excluded {
                                    line-height: normal;
                                    letter-spacing: normal;
                                    text-transform: none;
                                    font-weight: 400;
                                    font-size: medium;
                                    font-style: normal
                                }

                                .elementor-price-table .elementor-price-table__after-price {
                                    display: flex;
                                    flex-wrap: wrap;
                                    text-align: start;
                                    align-self: stretch;
                                    align-items: flex-start;
                                    flex-direction: column
                                }

                                .elementor-price-table .elementor-price-table__integer-part {
                                    line-height: .8
                                }

                                .elementor-price-table .elementor-price-table__currency, .elementor-price-table .elementor-price-table__fractional-part {
                                    line-height: 1;
                                    font-size: .3em
                                }

                                .elementor-price-table .elementor-price-table__currency {
                                    margin-right: 3px
                                }

                                .elementor-price-table .elementor-price-table__period {
                                    width: 100%;
                                    font-size: 13px;
                                    font-weight: 400
                                }

                                .elementor-price-table .elementor-price-table__features-list {
                                    list-style-type: none;
                                    margin: 0;
                                    padding: 0;
                                    line-height: 1;
                                    color: var(--e-price-table-features-list-color)
                                }

                                .elementor-price-table .elementor-price-table__features-list li {
                                    font-size: 14px;
                                    line-height: 1;
                                    margin: 0;
                                    padding: 0
                                }

                                .elementor-price-table .elementor-price-table__features-list li .elementor-price-table__feature-inner {
                                    margin-left: 15px;
                                    margin-right: 15px
                                }

                                .elementor-price-table .elementor-price-table__features-list li:not(:first-child):before {
                                    content: "";
                                    display: block;
                                    border: 0 solid hsla(0, 0%, 47.8%, .3);
                                    margin: 10px 12.5%
                                }

                                .elementor-price-table .elementor-price-table__features-list i {
                                    margin-right: 10px;
                                    font-size: 1.3em
                                }

                                .elementor-price-table .elementor-price-table__features-list svg {
                                    margin-right: 10px;
                                    fill: var(--e-price-table-features-list-color);
                                    height: 1.3em;
                                    width: 1.3em
                                }

                                .elementor-price-table .elementor-price-table__features-list svg ~ * {
                                    vertical-align: text-top
                                }

                                .elementor-price-table .elementor-price-table__footer {
                                    padding: 30px 0
                                }

                                .elementor-price-table .elementor-price-table__additional_info {
                                    margin: 0;
                                    font-size: 13px;
                                    line-height: 1.4
                                }

                                .elementor-price-table__ribbon {
                                    position: absolute;
                                    top: 0;
                                    left: auto;
                                    right: 0;
                                    transform: rotate(90deg);
                                    width: 150px;
                                    overflow: hidden;
                                    height: 150px
                                }

                                .elementor-price-table__ribbon-inner {
                                    text-align: center;
                                    left: 0;
                                    width: 200%;
                                    transform: translateY(-50%) translateX(-50%) translateX(35px) rotate(-45deg);
                                    margin-top: 35px;
                                    font-size: 13px;
                                    line-height: 2;
                                    font-weight: 800;
                                    text-transform: uppercase;
                                    background: #000
                                }

                                .elementor-price-table__ribbon.elementor-ribbon-left {
                                    transform: rotate(0);
                                    left: 0;
                                    right: auto
                                }

                                .elementor-price-table__ribbon.elementor-ribbon-right {
                                    transform: rotate(90deg);
                                    left: auto;
                                    right: 0
                                }

                                .elementor-widget-price-table .elementor-widget-container {
                                    overflow: hidden;
                                    background-color: #f9fafa
                                }

                                .e-con-inner > .elementor-widget-price-list, .e-con > .elementor-widget-price-list {
                                    width: var(--container-widget-width);
                                    --flex-grow: var(--container-widget-flex-grow)
                                }</style>
                            <ul class="elementor-price-list">

                                <li><a class="elementor-price-list-item" href="#">
                                        <div class="elementor-price-list-image">
                                            <img decoding="async"
                                                 src="wp-content/uploads/sites/5/2021/07/coinoneicon02.png"
                                                 alt="Manage  Crypto" loading="lazy"/></div>

                                        <div class="elementor-price-list-text">
                                            <div class="elementor-price-list-header">
											<span class="elementor-price-list-title">
							Futures Trading						</span>
                                                <span class="elementor-price-list-separator"></span>
                                            </div>
                                            <p class="elementor-price-list-description">
                                                Optimize for dual profit strategies.</p>
                                        </div>
                                    </a></li>
                                <li><a class="elementor-price-list-item" href="#">
                                        <div class="elementor-price-list-image">
                                            <img decoding="async"
                                                 src="wp-content/uploads/sites/5/2021/07/coinoneicon03.png"
                                                 alt="Mobile Apps" loading="lazy"/></div>

                                        <div class="elementor-price-list-text">
                                            <div class="elementor-price-list-header">
											<span class="elementor-price-list-title">
							Beginner-friendly features</span>
                                                <span class="elementor-price-list-separator"></span>
                                            </div>
                                            <p class="elementor-price-list-description">
                                                Supporting languages in 200+ countries/regions</p>
                                        </div>
                                    </a></li>
                                <li><a class="elementor-price-list-item" href="#">
                                        <div class="elementor-price-list-image">
                                            <img decoding="async"
                                                 src="wp-content/uploads/sites/5/2021/07/coinoneicon06.png"
                                                 alt="Capital Market" loading="lazy"/></div>

                                        <div class="elementor-price-list-text">
                                            <div class="elementor-price-list-header">
											<span class="elementor-price-list-title">
                                                Copy Trading
                                                </span>
                                                <span class="elementor-price-list-separator"></span>
                                            </div>
                                            <p class="elementor-price-list-description">
                                               Easily replicate trading strategies with precision.</p>
                                        </div>
                                    </a></li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section
        class="elementor-section elementor-top-section elementor-element elementor-element-f52239c elementor-section-height-min-height elementor-section-boxed elementor-section-height-default elementor-section-items-middle"
        data-id="f52239c" data-element_type="section"
        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
        <div class="elementor-background-overlay"></div>
        <div class="elementor-container elementor-column-gap-default">
            <div
                class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-b21ee28 elementor-invisible"
                data-id="b21ee28" data-element_type="column"
                data-settings="{&quot;animation&quot;:&quot;fadeIn&quot;,&quot;animation_delay&quot;:600}">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-275f5ed elementor-widget elementor-widget-image"
                         data-id="275f5ed" data-element_type="widget" data-widget_type="image.default">
                        <div class="elementor-widget-container">
                            <img loading="lazy" decoding="async" width="800" height="800"
                                 src="wp-content/uploads/sites/5/2021/07/coinonehome021.jpg"
                                 class="attachment-large size-large wp-image-470" alt=""
                                 srcset="https://demo2.strongtheme.com/coinone/wp-content/uploads/sites/5/2021/07/coinonehome021.jpg 1000w, https://demo2.strongtheme.com/coinone/wp-content/uploads/sites/5/2021/07/coinonehome021-300x300.jpg 300w, https://demo2.strongtheme.com/coinone/wp-content/uploads/sites/5/2021/07/coinonehome021-150x150.jpg 150w, https://demo2.strongtheme.com/coinone/wp-content/uploads/sites/5/2021/07/coinonehome021-768x768.jpg 768w, https://demo2.strongtheme.com/coinone/wp-content/uploads/sites/5/2021/07/coinonehome021-800x800.jpg 800w"
                                 sizes="(max-width: 800px) 100vw, 800px"/></div>
                    </div>
                </div>
            </div>
            <div
                class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-7dba2c7"
                data-id="7dba2c7" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">

                    <div
                        class="elementor-element elementor-element-e044d1f elementor-invisible elementor-widget elementor-widget-heading"
                        data-id="e044d1f" data-element_type="widget"
                        data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:400}"
                        data-widget_type="heading.default">
                        <div class="elementor-widget-container">
                            <h2 class="elementor-heading-title elementor-size-default">The freedom of crypto for</h2></div>
                    </div>
                    <div
                        class="elementor-element elementor-element-deb05b1 elementor-invisible elementor-widget elementor-widget-heading"
                        data-id="deb05b1" data-element_type="widget"
                        data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:400}"
                        data-widget_type="heading.default">
                        <div class="elementor-widget-container">
                            <h2 class="elementor-heading-title elementor-size-default">everyone, everywhere</h2></div>
                    </div>
                    <div class="elementor-element elementor-element-887bea1 elementor-widget elementor-widget-spacer"
                         data-id="887bea1" data-element_type="widget" data-widget_type="spacer.default">
                        <div class="elementor-widget-container">
                            <style>/*! elementor - v3.23.0 - 05-08-2024 */
                                .elementor-column .elementor-spacer-inner {
                                    height: var(--spacer-size)
                                }

                                .e-con {
                                    --container-widget-width: 100%
                                }

                                .e-con-inner > .elementor-widget-spacer, .e-con > .elementor-widget-spacer {
                                    width: var(--container-widget-width, var(--spacer-size));
                                    --align-self: var(--container-widget-align-self, initial);
                                    --flex-shrink: 0
                                }

                                .e-con-inner > .elementor-widget-spacer > .elementor-widget-container, .e-con > .elementor-widget-spacer > .elementor-widget-container {
                                    height: 100%;
                                    width: 100%
                                }

                                .e-con-inner > .elementor-widget-spacer > .elementor-widget-container > .elementor-spacer, .e-con > .elementor-widget-spacer > .elementor-widget-container > .elementor-spacer {
                                    height: 100%
                                }

                                .e-con-inner > .elementor-widget-spacer > .elementor-widget-container > .elementor-spacer > .elementor-spacer-inner, .e-con > .elementor-widget-spacer > .elementor-widget-container > .elementor-spacer > .elementor-spacer-inner {
                                    height: var(--container-widget-height, var(--spacer-size))
                                }

                                .e-con-inner > .elementor-widget-spacer.elementor-widget-empty, .e-con > .elementor-widget-spacer.elementor-widget-empty {
                                    position: relative;
                                    min-height: 22px;
                                    min-width: 22px
                                }

                                .e-con-inner > .elementor-widget-spacer.elementor-widget-empty .elementor-widget-empty-icon, .e-con > .elementor-widget-spacer.elementor-widget-empty .elementor-widget-empty-icon {
                                    position: absolute;
                                    top: 0;
                                    bottom: 0;
                                    left: 0;
                                    right: 0;
                                    margin: auto;
                                    padding: 0;
                                    width: 22px;
                                    height: 22px
                                }</style>
                            <div class="elementor-spacer">
                                <div class="elementor-spacer-inner"></div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="elementor-element elementor-element-431f31d elementor-invisible elementor-widget elementor-widget-text-editor"
                        data-id="431f31d" data-element_type="widget"
                        data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:600}"
                        data-widget_type="text-editor.default">
                        <div class="elementor-widget-container">
                            <p>We’re committed to creating more economic freedom through accessible, safe, and secure financial tools for everyone.
</p>
                            <p>Making Crypto Trading Easier & trading with users in mind as the number 1 Global Cryptocurrency Exchange
                            </p></div>
                    </div>
                    <div
                        class="elementor-element elementor-element-6fbbcd0 elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                        data-id="6fbbcd0" data-element_type="widget" data-widget_type="divider.default">
                        <div class="elementor-widget-container">
                            <style>/*! elementor - v3.23.0 - 05-08-2024 */
                                .elementor-widget-divider {
                                    --divider-border-style: none;
                                    --divider-border-width: 1px;
                                    --divider-color: #0c0d0e;
                                    --divider-icon-size: 20px;
                                    --divider-element-spacing: 10px;
                                    --divider-pattern-height: 24px;
                                    --divider-pattern-size: 20px;
                                    --divider-pattern-url: none;
                                    --divider-pattern-repeat: repeat-x
                                }

                                .elementor-widget-divider .elementor-divider {
                                    display: flex
                                }

                                .elementor-widget-divider .elementor-divider__text {
                                    font-size: 15px;
                                    line-height: 1;
                                    max-width: 95%
                                }

                                .elementor-widget-divider .elementor-divider__element {
                                    margin: 0 var(--divider-element-spacing);
                                    flex-shrink: 0
                                }

                                .elementor-widget-divider .elementor-icon {
                                    font-size: var(--divider-icon-size)
                                }

                                .elementor-widget-divider .elementor-divider-separator {
                                    display: flex;
                                    margin: 0;
                                    direction: ltr
                                }

                                .elementor-widget-divider--view-line_icon .elementor-divider-separator, .elementor-widget-divider--view-line_text .elementor-divider-separator {
                                    align-items: center
                                }

                                .elementor-widget-divider--view-line_icon .elementor-divider-separator:after, .elementor-widget-divider--view-line_icon .elementor-divider-separator:before, .elementor-widget-divider--view-line_text .elementor-divider-separator:after, .elementor-widget-divider--view-line_text .elementor-divider-separator:before {
                                    display: block;
                                    content: "";
                                    border-block-end: 0;
                                    flex-grow: 1;
                                    border-block-start: var(--divider-border-width) var(--divider-border-style) var(--divider-color)
                                }

                                .elementor-widget-divider--element-align-left .elementor-divider .elementor-divider-separator > .elementor-divider__svg:first-of-type {
                                    flex-grow: 0;
                                    flex-shrink: 100
                                }

                                .elementor-widget-divider--element-align-left .elementor-divider-separator:before {
                                    content: none
                                }

                                .elementor-widget-divider--element-align-left .elementor-divider__element {
                                    margin-left: 0
                                }

                                .elementor-widget-divider--element-align-right .elementor-divider .elementor-divider-separator > .elementor-divider__svg:last-of-type {
                                    flex-grow: 0;
                                    flex-shrink: 100
                                }

                                .elementor-widget-divider--element-align-right .elementor-divider-separator:after {
                                    content: none
                                }

                                .elementor-widget-divider--element-align-right .elementor-divider__element {
                                    margin-right: 0
                                }

                                .elementor-widget-divider--element-align-start .elementor-divider .elementor-divider-separator > .elementor-divider__svg:first-of-type {
                                    flex-grow: 0;
                                    flex-shrink: 100
                                }

                                .elementor-widget-divider--element-align-start .elementor-divider-separator:before {
                                    content: none
                                }

                                .elementor-widget-divider--element-align-start .elementor-divider__element {
                                    margin-inline-start: 0
                                }

                                .elementor-widget-divider--element-align-end .elementor-divider .elementor-divider-separator > .elementor-divider__svg:last-of-type {
                                    flex-grow: 0;
                                    flex-shrink: 100
                                }

                                .elementor-widget-divider--element-align-end .elementor-divider-separator:after {
                                    content: none
                                }

                                .elementor-widget-divider--element-align-end .elementor-divider__element {
                                    margin-inline-end: 0
                                }

                                .elementor-widget-divider:not(.elementor-widget-divider--view-line_text):not(.elementor-widget-divider--view-line_icon) .elementor-divider-separator {
                                    border-block-start: var(--divider-border-width) var(--divider-border-style) var(--divider-color)
                                }

                                .elementor-widget-divider--separator-type-pattern {
                                    --divider-border-style: none
                                }

                                .elementor-widget-divider--separator-type-pattern.elementor-widget-divider--view-line .elementor-divider-separator, .elementor-widget-divider--separator-type-pattern:not(.elementor-widget-divider--view-line) .elementor-divider-separator:after, .elementor-widget-divider--separator-type-pattern:not(.elementor-widget-divider--view-line) .elementor-divider-separator:before, .elementor-widget-divider--separator-type-pattern:not([class*=elementor-widget-divider--view]) .elementor-divider-separator {
                                    width: 100%;
                                    min-height: var(--divider-pattern-height);
                                    -webkit-mask-size: var(--divider-pattern-size) 100%;
                                    mask-size: var(--divider-pattern-size) 100%;
                                    -webkit-mask-repeat: var(--divider-pattern-repeat);
                                    mask-repeat: var(--divider-pattern-repeat);
                                    background-color: var(--divider-color);
                                    -webkit-mask-image: var(--divider-pattern-url);
                                    mask-image: var(--divider-pattern-url)
                                }

                                .elementor-widget-divider--no-spacing {
                                    --divider-pattern-size: auto
                                }

                                .elementor-widget-divider--bg-round {
                                    --divider-pattern-repeat: round
                                }

                                .rtl .elementor-widget-divider .elementor-divider__text {
                                    direction: rtl
                                }

                                .e-con-inner > .elementor-widget-divider, .e-con > .elementor-widget-divider {
                                    width: var(--container-widget-width, 100%);
                                    --flex-grow: var(--container-widget-flex-grow)
                                }</style>
                            <div class="elementor-divider">
			<span class="elementor-divider-separator">
						</span>
                            </div>
                        </div>
                    </div>
                    <div
                        class="elementor-element elementor-element-e65bff2 elementor-invisible elementor-widget elementor-widget-button"
                        data-id="e65bff2" data-element_type="widget"
                        data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:800}"
                        data-widget_type="button.default">
                        <div class="elementor-widget-container">
                            <div class="elementor-button-wrapper">
                                <a class="elementor-button elementor-button-link elementor-size-sm" href="#">
						<span class="elementor-button-content-wrapper">
						<span class="elementor-button-icon">
				<i aria-hidden="true" class="fas fa-arrow-right"></i>			</span>
									<span class="elementor-button-text">About Us</span>
					</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section
        class="elementor-section elementor-top-section elementor-element elementor-element-56eed45 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
        data-id="56eed45" data-element_type="section">
        <div class="elementor-container elementor-column-gap-default">
            <div
                class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-cda09c9"
                data-id="cda09c9" data-element_type="column"
                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <section
                        class="elementor-section elementor-inner-section elementor-element elementor-element-066a030 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                        data-id="066a030" data-element_type="section">
                        <div class="elementor-container elementor-column-gap-default">
                            <div
                                class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-271a19f"
                                data-id="271a19f" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div
                                        class="elementor-element elementor-element-0643354 elementor-widget elementor-widget-counter"
                                        data-id="0643354" data-element_type="widget" data-widget_type="counter.default">
                                        <div class="elementor-widget-container">
                                            <style>/*! elementor - v3.23.0 - 05-08-2024 */
                                                .elementor-counter {
                                                    display: flex;
                                                    justify-content: center;
                                                    align-items: stretch;
                                                    flex-direction: column-reverse
                                                }

                                                .elementor-counter .elementor-counter-number {
                                                    flex-grow: var(--counter-number-grow, 0)
                                                }

                                                .elementor-counter .elementor-counter-number-wrapper {
                                                    flex: 1;
                                                    display: flex;
                                                    font-size: 69px;
                                                    font-weight: 600;
                                                    line-height: 1;
                                                    text-align: center
                                                }

                                                .elementor-counter .elementor-counter-number-prefix {
                                                    text-align: end;
                                                    flex-grow: var(--counter-prefix-grow, 1);
                                                    white-space: pre-wrap
                                                }

                                                .elementor-counter .elementor-counter-number-suffix {
                                                    text-align: start;
                                                    flex-grow: var(--counter-suffix-grow, 1);
                                                    white-space: pre-wrap
                                                }

                                                .elementor-counter .elementor-counter-title {
                                                    flex: 1;
                                                    display: flex;
                                                    justify-content: center;
                                                    align-items: center;
                                                    margin: 0;
                                                    padding: 0;
                                                    font-size: 19px;
                                                    font-weight: 400;
                                                    line-height: 2.5
                                                }</style>
                                            <div class="elementor-counter">
                                                <div class="elementor-counter-title">Currencies Available</div>
                                                <div class="elementor-counter-number-wrapper">
                                                    <span class="elementor-counter-number-prefix"></span>
                                                    <span class="elementor-counter-number" data-duration="2000"
                                                          data-to-value="500" data-from-value="0"
                                                          data-delimiter=",">0</span>
                                                    <span class="elementor-counter-number-suffix">+</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-638a008"
                                data-id="638a008" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div
                                        class="elementor-element elementor-element-7c51973 elementor-widget elementor-widget-counter"
                                        data-id="7c51973" data-element_type="widget" data-widget_type="counter.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-counter">
                                                <div class="elementor-counter-title">Verified Users</div>
                                                <div class="elementor-counter-number-wrapper">
                                                    <span class="elementor-counter-number-prefix"></span>
                                                    <span class="elementor-counter-number" data-duration="2000"
                                                          data-to-value="34" data-from-value="0"
                                                          data-delimiter=",">0</span>
                                                    <span class="elementor-counter-number-suffix">M</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-12598d1"
                                data-id="12598d1" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div
                                        class="elementor-element elementor-element-0551d08 elementor-widget elementor-widget-counter"
                                        data-id="0551d08" data-element_type="widget" data-widget_type="counter.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-counter">
                                                <div class="elementor-counter-title">Quarterly volume Traded</div>
                                                <div class="elementor-counter-number-wrapper">
                                                    <span class="elementor-counter-number-prefix">$</span>
                                                    <span class="elementor-counter-number" data-duration="2000"
                                                          data-to-value="105" data-from-value="0"
                                                          data-delimiter=",">0</span>
                                                    <span class="elementor-counter-number-suffix">B</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-79c1ac9"
                                data-id="79c1ac9" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div
                                        class="elementor-element elementor-element-d6c696f elementor-widget elementor-widget-counter"
                                        data-id="d6c696f" data-element_type="widget" data-widget_type="counter.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-counter">
                                                <div class="elementor-counter-title">Countries Supported</div>
                                                <div class="elementor-counter-number-wrapper">
                                                    <span class="elementor-counter-number-prefix"></span>
                                                    <span class="elementor-counter-number" data-duration="2000"
                                                          data-to-value="200" data-from-value="0"
                                                          data-delimiter=",">0</span>
                                                    <span class="elementor-counter-number-suffix">+</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>
    <section
        class="elementor-section elementor-top-section elementor-element elementor-element-7013a27 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
        data-id="7013a27" data-element_type="section">
        <div class="elementor-container elementor-column-gap-default">
            <div
                class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-cd3d05d elementor-invisible"
                data-id="cd3d05d" data-element_type="column"
                data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeIn&quot;,&quot;animation_delay&quot;:200}">
                <script async src="https://static.coinstats.app/widgets/coin-list-widget.js"></script>
<coin-stats-list-widget locale="en" currency="USD" bg-color="#ffffff" status-up-color="#74D492" status-down-color="#FE4747" text-color="#000000" font="Roboto, Arial, Helvetica" border-color="rgba(255,255,255,0.15)" width="362" coin-ids="bitcoin,ethereum,litecoin,solana,binance-coin,dogecoin,ripple,cardano,shiba-inu"></coin-stats-list-widget>

            </div>
            <div
                class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-1b68880"
                data-id="1b68880" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <section
                        class="elementor-section elementor-inner-section elementor-element elementor-element-9a22afe elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                        data-id="9a22afe" data-element_type="section">
                        <div class="elementor-container elementor-column-gap-default">
                            <div
                                class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-b8a2467 elementor-invisible"
                                data-id="b8a2467" data-element_type="column"
                                data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeIn&quot;,&quot;animation_delay&quot;:400}">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div
                                        class="elementor-element elementor-element-6753513 elementor-position-top elementor-widget elementor-widget-image-box"
                                        data-id="6753513" data-element_type="widget"
                                        data-widget_type="image-box.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-image-box-wrapper">
                                                <figure class="elementor-image-box-img"><img decoding="async"
                                                                                             src="wp-content/uploads/sites/5/2021/07/Safety.png"
                                                                                             title="Safety" alt="Safety"
                                                                                             loading="lazy"/></figure>
                                                <div class="elementor-image-box-content"><h3
                                                        class="elementor-image-box-title">Safe and Secure</h3>
                                                    <p class="elementor-image-box-description">We prudently manages assets for our customers with state-of-the-art encryption and security programs.</p></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-074ff8c elementor-invisible"
                                data-id="074ff8c" data-element_type="column"
                                data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeIn&quot;,&quot;animation_delay&quot;:600}">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div
                                        class="elementor-element elementor-element-2f920fc elementor-position-top elementor-widget elementor-widget-image-box"
                                        data-id="2f920fc" data-element_type="widget"
                                        data-widget_type="image-box.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-image-box-wrapper">
                                                <figure class="elementor-image-box-img"><img loading="lazy"
                                                                                             decoding="async"
                                                                                             width="512" height="512"
                                                                                             src="wp-content/uploads/sites/5/2021/07/Monitoring.png"
                                                                                             class="attachment-full size-full wp-image-246"
                                                                                             alt=""
                                                                                             srcset="https://demo2.strongtheme.com/coinone/wp-content/uploads/sites/5/2021/07/Monitoring.png 512w, https://demo2.strongtheme.com/coinone/wp-content/uploads/sites/5/2021/07/Monitoring-300x300.png 300w, https://demo2.strongtheme.com/coinone/wp-content/uploads/sites/5/2021/07/Monitoring-150x150.png 150w"
                                                                                             sizes="(max-width: 512px) 100vw, 512px"/>
                                                </figure>
                                                <div class="elementor-image-box-content"><h3
                                                        class="elementor-image-box-title">Real-time Data</h3>
                                                    <p class="elementor-image-box-description">unlock real-time market data with high throughput APIs.</p></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section
                        class="elementor-section elementor-inner-section elementor-element elementor-element-87e6d17 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                        data-id="87e6d17" data-element_type="section">
                        <div class="elementor-container elementor-column-gap-default">
                            <div
                                class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-b1b321a elementor-invisible"
                                data-id="b1b321a" data-element_type="column"
                                data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeIn&quot;,&quot;animation_delay&quot;:800}">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div
                                        class="elementor-element elementor-element-ba1aa31 elementor-position-top elementor-widget elementor-widget-image-box"
                                        data-id="ba1aa31" data-element_type="widget"
                                        data-widget_type="image-box.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-image-box-wrapper">
                                                <figure class="elementor-image-box-img"><img decoding="async"
                                                                                             src="wp-content/uploads/sites/5/2021/07/Select.png"
                                                                                             title="Select" alt="Select"
                                                                                             loading="lazy"/></figure>
                                                <div class="elementor-image-box-content"><h3
                                                        class="elementor-image-box-title">Track Profit</h3>
                                                    <p class="elementor-image-box-description">Manage risk in volatile markets with limit orders and stop-limit orders.</p></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-0a818a0 elementor-invisible"
                                data-id="0a818a0" data-element_type="column"
                                data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeIn&quot;,&quot;animation_delay&quot;:1000}">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div
                                        class="elementor-element elementor-element-c6f250e elementor-position-top elementor-widget elementor-widget-image-box"
                                        data-id="c6f250e" data-element_type="widget"
                                        data-widget_type="image-box.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-image-box-wrapper">
                                                <figure class="elementor-image-box-img"><img loading="lazy"
                                                                                             decoding="async"
                                                                                             width="512" height="512"
                                                                                             src="wp-content/uploads/sites/5/2021/07/Settings.png"
                                                                                             class="attachment-full size-full wp-image-252"
                                                                                             alt=""
                                                                                             srcset="https://demo2.strongtheme.com/coinone/wp-content/uploads/sites/5/2021/07/Settings.png 512w, https://demo2.strongtheme.com/coinone/wp-content/uploads/sites/5/2021/07/Settings-300x300.png 300w, https://demo2.strongtheme.com/coinone/wp-content/uploads/sites/5/2021/07/Settings-150x150.png 150w"
                                                                                             sizes="(max-width: 512px) 100vw, 512px"/>
                                                </figure>
                                                <div class="elementor-image-box-content"><h3
                                                        class="elementor-image-box-title">Customizable Charts</h3>
                                                    <p class="elementor-image-box-description">Get ahead of the game with TradingView charts, technical indicators, and custom watchlist.</p></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection
