<div class="sidebar">
    <nav class="sidebar-nav">
        <ul class="nav">
            <li class="nav-title">{{ trans('brackets/admin-ui::admin.sidebar.content') }}</li>
            {{--            <li class="nav-item"><a class="nav-link" href="{{ url('admin/tasks') }}"><i class="nav-icon icon-star"></i> {{ trans('admin.task.title') }}</a></li>--}}
            {{--           <li class="nav-item"><a class="nav-link" href="{{ url('admin/quizzes') }}"><i class="nav-icon icon-umbrella"></i> {{ trans('admin.quiz.title') }}</a></li>--}}
            <li class="nav-item"><a class="nav-link" href="{{ url('admin/exams') }}"><i
                        class="nav-icon icon-diamond"></i> {{ trans('admin.exam.title') }}</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ url('admin/questions') }}"><i class="nav-icon icon-star"></i> {{ trans('admin.question.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/students') }}"><i class="nav-icon icon-graduation"></i> {{ trans('admin.student.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/answers') }}"><i class="nav-icon icon-compass"></i> {{ trans('admin.answer.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/attempts') }}"><i class="nav-icon icon-energy"></i> {{ trans('admin.attempt.title') }}</a></li>
           {{-- Do not delete me :) I'm used for auto-generation menu items --}}

            <li class="nav-title">{{ trans('brackets/admin-ui::admin.sidebar.settings') }}</li>
            <li class="nav-item"><a class="nav-link" href="{{ url('admin/admin-users') }}"><i
                        class="nav-icon icon-user"></i> {{ __('Manage access') }}</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ url('admin/translations') }}"><i
                        class="nav-icon icon-location-pin"></i> {{ __('Translations') }}</a></li>
            {{-- Do not delete me :) I'm also used for auto-generation menu items --}}
            {{--<li class="nav-item"><a class="nav-link" href="{{ url('admin/configuration') }}"><i class="nav-icon icon-settings"></i> {{ __('Configuration') }}</a></li>--}}
        </ul>
    </nav>
    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div>
