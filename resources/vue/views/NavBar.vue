<template>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
        <div class="container-fluid">
            <H4 class="navbar-brand" href="#">{{ $t('admin panel') }}</H4>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <router-link
                            class="nav-link active"
                            to="/"
                        >
                            {{ $t('home') }}

                        </router-link>

                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                           data-bs-toggle="dropdown" aria-expanded="false">
                            {{ $t('shift') }}
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: #e3f3ff;">
                            <router-link
                                class="dropdown-item"
                                :to="{ name: 'createShift'}"


                            >
                                {{ $t('add shift') }}
                            </router-link>
                            <router-link
                                class="dropdown-item"
                                :to="{ name: 'shiftList'}"
                            >
                                {{ $t('shift list') }}

                            </router-link>


                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                           data-bs-toggle="dropdown" aria-expanded="false">
                            {{ $t('workspaces') }}
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: #e3f3ff;">
                            <router-link
                                class="dropdown-item"
                                :to="{ name: 'createWorkspace'}"


                            >
                                {{ $t('add workspace') }}

                            </router-link>
                            <router-link
                                class="dropdown-item"
                                :to="{ name: 'workspaceList'}"
                            >
                                {{ $t('workspace list') }}

                            </router-link>

                            <router-link
                                class="dropdown-item"
                                :to="{ name: 'assignmentUserToWorkspace'}"
                            >

                                {{ $t('assigment workspace') }}

                            </router-link>

                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                           data-bs-toggle="dropdown" aria-expanded="false">
                            {{ $t('log out') }}
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <router-link
                                class="dropdown-item"
                                to="/logout"
                            >
                                {{ $t('log out') }}

                            </router-link>

                        </ul>
                    </li>

                </ul>
<!--                <form class="d-flex">-->
<!--                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">-->
<!--                    <button class="btn btn-outline-success" type="submit">Search</button>-->
<!--                </form>-->
            </div>
        </div>
    </nav>
</template>
