<div class="m-wizard m-wizard--2 m-wizard--success" id="m_wizard">

    <!--begin: Message container -->
    <div class="m-portlet__padding-x">
        <!-- Here you can put a message or alert -->

    </div>
    <!--end: Message container -->

    <div class="m-wizard__head m-portlet__padding-x">

        <div class="m-wizard__progress">
            <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>

        <div class="m-wizard__nav">
            <div class="m-wizard__steps">
                <div class="m-wizard__step m-wizard__step--current" m-wizard-target="m_wizard_form_step_1">
                    <a href="#" class="m-wizard__step-number">
                        <span>
                            <i class="{{$title1['icon']}}"></i>
                        </span>
                    </a>
                    <div class="m-wizard__step-info">
                        <div class="m-wizard__step-title">
                            1. {{$title1['name']}}
                        </div>
                        {{-- <div class="m-wizard__step-desc">
                            Lorem ipsum doler amet elit
                            <br> sed eiusmod tempors
                        </div> --}}
                    </div>
                </div>
                <div class="m-wizard__step" m-wizard-target="m_wizard_form_step_2">
                    <a href="#" class="m-wizard__step-number">
                        <span>
                            <i class="{{$title2['icon']}}"></i>
                        </span>
                    </a>
                    <div class="m-wizard__step-info">
                        <div class="m-wizard__step-title">
                            2. {{$title2['name']}}
                        </div>
                        {{-- <div class="m-wizard__step-desc">
                            Lorem ipsum doler amet elit
                            <br> sed eiusmod tempors
                        </div> --}}
                    </div>
                </div>
                <div class="m-wizard__step" m-wizard-target="m_wizard_form_step_3">
                    <a href="#" class="m-wizard__step-number">
                        <span>
                            <i class="{{$title3['icon']}}"></i>
                        </span>
                    </a>
                    <div class="m-wizard__step-info">
                        <div class="m-wizard__step-title">
                            3. {{$title3['name']}}
                        </div>
                        {{-- <div class="m-wizard__step-desc">
                            Lorem ipsum doler amet elit
                            <br> sed eiusmod tempors
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="m-wizard__form">

        {{-- <form class="m-form m-form--label-align-left- m-form--state-" id="m_form" method="post" enctype="multipart/form-data" action="{{$form}} --}}
        <form action="{{$form}}" class="m-form m-form--label-align-left- m-form--state-" id="m_form" method="post" enctype="multipart/form-data">
            @csrf
            <div class="m-portlet__body">

                <div class="m-wizard__form-step m-wizard__form-step--current" id="m_wizard_form_step_1">
                    <div class="row">
                        {{$content1}}
                    </div>
                </div>

                <div class="m-wizard__form-step" id="m_wizard_form_step_2">
                    <div class="row">
                        {{$content2}}
                    </div>
                </div>

                <div class="m-wizard__form-step" id="m_wizard_form_step_3">
                    <div class="row">
                        {{$content3}}
                    </div>
                </div>
            </div>

            <div class="m-portlet__foot m-portlet__foot--fit m--margin-top-40">
                <div class="m-form__actions">
                    <div class="row">
                        <div class="col-lg-6 m--align-left">
                            <button class="btn btn-secondary m-btn m-btn--custom m-btn--icon" data-wizard-action="prev">
                                <span>
                                    <i class="la la-arrow-left"></i>&nbsp;&nbsp;
                                    <span>Voltar</span>
                                </span>
                            </button>
                        </div>
                        <div class="col-lg-6 m--align-right">
                            <button class="btn btn-primary m-btn m-btn--custom m-btn--icon" data-wizard-action="submit">
                                <span>
                                    <i class="la la-check"></i>&nbsp;&nbsp;
                                    <span>Enviar</span>
                                </span>
                            </button>
                            <button class="btn btn-warning m-btn m-btn--custom m-btn--icon" data-wizard-action="next">
								<span>
									<span>Continuar</span>&nbsp;&nbsp;
									<i class="la la-arrow-right"></i>
								</span>
							</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
