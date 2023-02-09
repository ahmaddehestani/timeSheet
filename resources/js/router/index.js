import { createWebHistory, createRouter } from 'vue-router';
import Dashboard from '../../vue/views/DashBoard.vue';
import AdminPanel from '../../vue/views/AdminPanel.vue';
import '../../sass/app.scss';
import Register from '../../vue/views/Register.vue';
import Login from '../../vue/views/Login.vue';
import ForgetPass from '../../vue/views/ForgetPass.vue';
import Logout from '../../vue/views/Logout.vue';
import CreateWorkspace from '../../vue/views/WorkSpaces/Create.vue';
import EditWorkspace from '../../vue/views/WorkSpaces/Edit.vue';
import WorkspaceList from '../../vue/views/WorkSpaces/WorkspaceList.vue';
import AssignmentUserToWorkspace from '../../vue/views/WorkSpaces/AssignmentUserToWorkspace.vue';
import CreateShift from '../../vue/views/Shifts/Create.vue';
import ShiftList from '../../vue/views/Shifts/ShiftList.vue';
import EditShift from '../../vue/views/Shifts/Edit.vue';

const routes = [
    {
        path: '/',
        name: 'adminPanel',
        component: AdminPanel,
    },
    {
        path: '/login',
        name: 'login',
        component: Login,
    },
    {
        path: '/register',
        name: 'register',
        component: Register,
    },
    {
        path: '/forgetPassword',
        name: 'forgetPass',
        component: ForgetPass,
    },
    {
        path: '/logout',
        name: 'logout',
        component: Logout,
    },
    {
        path: '/create',
        name: 'createWorkspace',
        component: CreateWorkspace,
    },
    {
        path: '/workspaces/edit/:id',
        name: 'editWorkspace',
        component: EditWorkspace,
    },
    {
        path: '/workspaces',
        name: 'workspaceList',
        component: WorkspaceList,
    },
    {
        path: '/workspaces/assignmentUserToWorkspace',
        name: 'assignmentUserToWorkspace',
        component: AssignmentUserToWorkspace,
    },
    {
        path: '/shifts/create',
        name: 'createShift',
        component: CreateShift,
    },
    {
        path: '/shifts',
        name: 'shiftList',
        component: ShiftList,
    },
    {
        path: '/shifts/edit/:id',
        name: 'editShift',
        component: EditShift,
    },
];

const router = createRouter({
    history: createWebHistory(import.meta.env.BASE_URL),
    routes,
});

export default router;
