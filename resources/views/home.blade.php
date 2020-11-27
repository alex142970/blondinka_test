@extends('layouts.app')

@section('content')
    <main class="sm:container sm:mx-auto sm:mt-10">
        <div class="w-full sm:px-6">

            @if (session('status'))
                <div
                    class="text-sm border border-t-8 rounded text-green-700 border-green-600 bg-green-100 px-3 py-4 mb-4"
                    role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <section class="flex flex-col break-words bg-white sm:border-1 sm:rounded-md sm:shadow-sm sm:shadow-lg">

                <header class="font-semibold bg-gray-200 text-gray-700 py-5 px-6 sm:py-6 sm:px-8 sm:rounded-t-md">
                    Профиль пользователя
                </header>

                <div class="w-full p-6">
                    <table class="table">
                        <tr>
                            <td>Активность</td>
                            <td>{{$profile['active']}}</td>
                        </tr>
                        <tr>
                            <td>E-Mail</td>
                            <td>{{auth()->user()->email}}</td>
                        </tr>
                        <tr>
                            <td>Имя</td>
                            <td>{{auth()->user()->name}}</td>
                        </tr>
                        <tr>
                            <td>Фамилия</td>
                            <td>{{$profile['last_name']}}</td>
                        </tr>
                        <tr>
                            <td>Отчество</td>
                            <td>{{$profile['second_name']}}</td>
                        </tr>
                        <tr>
                            <td>Пол</td>
                            <td>{{$profile['personal_gender']}}</td>
                        </tr>
                        <tr>
                            <td>Профессия</td>
                            <td>{{$profile['personal_profession']}}</td>
                        </tr>
                        <tr>
                            <td>Домашняя страничка</td>
                            <td>{{$profile['personal_www']}}</td>
                        </tr>
                        <tr>
                            <td>Дата рождения</td>
                            <td>{{$profile['personal_birthday']}}</td>
                        </tr>
                        <tr>
                            <td>Фотография</td>
                            <td>{{$profile['personal_photo']}}</td>
                        </tr>
                        <tr>
                            <td>ICQ</td>
                            <td>{{$profile['personal_icq']}}</td>
                        </tr>
                        <tr>
                            <td>Личный телефон</td>
                            <td>{{$profile['personal_phone']}}</td>
                        </tr>
                        <tr>
                            <td>Факс</td>
                            <td>{{$profile['personal_fax']}}</td>
                        </tr>
                        <tr>
                            <td>Личный мобильный</td>
                            <td>{{$profile['personal_mobile']}}</td>
                        </tr>
                        <tr>
                            <td>Пейджер</td>
                            <td>{{$profile['personal_pager']}}</td>
                        </tr>
                        <tr>
                            <td>Улица проживания</td>
                            <td>{{$profile['personal_street']}}</td>
                        </tr>
                        <tr>
                            <td>Город проживания</td>
                            <td>{{$profile['personal_city']}}</td>
                        </tr>
                        <tr>
                            <td>Область / край</td>
                            <td>{{$profile['personal_state']}}</td>
                        </tr>
                        <tr>
                            <td>Почтовый индекс</td>
                            <td>{{$profile['personal_zip']}}</td>
                        </tr>
                        <tr>
                            <td>Страна</td>
                            <td>{{$profile['personal_country']}}</td>
                        </tr>
                        <tr>
                            <td>Компания</td>
                            <td>{{$profile['personal_company']}}</td>
                        </tr>
                        <tr>
                            <td>Должность</td>
                            <td>{{$profile['work_position']}}</td>
                        </tr>
                        <tr>
                            <td>Подразделения</td>
                            <td>{{$profile['work_department']}}</td>
                        </tr>
                        <tr>
                            <td>Интересы</td>
                            <td>{{$profile['uf_interests']}}</td>
                        </tr>
                        <tr>
                            <td>Навыки</td>
                            <td>{{$profile['uf_skills']}}</td>
                        </tr>
                        <tr>
                            <td>Другие сайты</td>
                            <td>{{$profile['uf_web_sites']}}</td>
                        </tr>
                        <tr>
                            <td>Xing</td>
                            <td>{{$profile['uf_xing']}}</td>
                        </tr>
                        <tr>
                            <td>LinkedIn</td>
                            <td>{{$profile['uf_linkedin']}}</td>
                        </tr>
                        <tr>
                            <td>Facebook</td>
                            <td>{{$profile['uf_facebook']}}</td>
                        </tr>
                        <tr>
                            <td>Twitter</td>
                            <td>{{$profile['uf_twitter']}}</td>
                        </tr>
                        <tr>
                            <td>Skype</td>
                            <td>{{$profile['uf_skype']}}</td>
                        </tr>
                        <tr>
                            <td>Район</td>
                            <td>{{$profile['uf_district']}}</td>
                        </tr>
                        <tr>
                            <td>Внутренний телефон</td>
                            <td>{{$profile['uf_phone_inner']}}</td>
                        </tr>
                    </table>
                </div>
            </section>
        </div>
    </main>
@endsection
