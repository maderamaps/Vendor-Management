<aside class="sidebar">
    <a class="menu {{(request()->is('dashboard*')) ? 'active' : ''}}">
        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
            <g clip-path="url(#clip0_6_195)">
                <path
                    d="M0.9375 0.9375C1.45605 0.9375 1.875 1.35645 1.875 1.875V11.7188C1.875 11.9766 2.08594 12.1875 2.34375 12.1875H14.0625C14.5811 12.1875 15 12.6064 15 13.125C15 13.6436 14.5811 14.0625 14.0625 14.0625H2.34375C1.04883 14.0625 0 13.0137 0 11.7188V1.875C0 1.35645 0.418945 0.9375 0.9375 0.9375ZM4.6875 6.5625C5.20605 6.5625 5.625 6.98145 5.625 7.5V9.375C5.625 9.89355 5.20605 10.3125 4.6875 10.3125C4.16895 10.3125 3.75 9.89355 3.75 9.375V7.5C3.75 6.98145 4.16895 6.5625 4.6875 6.5625ZM8.4375 4.6875V9.375C8.4375 9.89355 8.01855 10.3125 7.5 10.3125C6.98145 10.3125 6.5625 9.89355 6.5625 9.375V4.6875C6.5625 4.16895 6.98145 3.75 7.5 3.75C8.01855 3.75 8.4375 4.16895 8.4375 4.6875ZM10.3125 5.625C10.8311 5.625 11.25 6.04395 11.25 6.5625V9.375C11.25 9.89355 10.8311 10.3125 10.3125 10.3125C9.79395 10.3125 9.375 9.89355 9.375 9.375V6.5625C9.375 6.04395 9.79395 5.625 10.3125 5.625ZM14.0625 2.8125V9.375C14.0625 9.89355 13.6436 10.3125 13.125 10.3125C12.6064 10.3125 12.1875 9.89355 12.1875 9.375V2.8125C12.1875 2.29395 12.6064 1.875 13.125 1.875C13.6436 1.875 14.0625 2.29395 14.0625 2.8125Z"
                    fill="white" />
            </g>
            <defs>
                <clipPath id="clip0_6_195">
                    <rect width="15" height="15" fill="white" />
                </clipPath>
            </defs>
        </svg>
        Dashboard
    </a>
    <a class="menu {{(request()->is('profile*')) ? 'active' : ''}}"" href="{{route('profile.index')}}">
        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="15" viewBox="0 0 14 15" fill="none">
            <g clip-path="url(#clip0_20_368)">
                <path
                    d="M6.56494 7.5C7.5595 7.5 8.51333 7.10491 9.21659 6.40165C9.91985 5.69839 10.3149 4.74456 10.3149 3.75C10.3149 2.75544 9.91985 1.80161 9.21659 1.09835C8.51333 0.395088 7.5595 0 6.56494 0C5.57038 0 4.61655 0.395088 3.91329 1.09835C3.21003 1.80161 2.81494 2.75544 2.81494 3.75C2.81494 4.74456 3.21003 5.69839 3.91329 6.40165C4.61655 7.10491 5.57038 7.5 6.56494 7.5ZM5.22607 8.90625C2.34033 8.90625 0.00244141 11.2441 0.00244141 14.1299C0.00244141 14.6104 0.39209 15 0.872559 15H12.2573C12.7378 15 13.1274 14.6104 13.1274 14.1299C13.1274 11.2441 10.7896 8.90625 7.90381 8.90625H5.22607Z"
                    fill="white" />
            </g>
            <defs>
                <clipPath id="clip0_20_368">
                    <rect width="13.13" height="15" fill="white" />
                </clipPath>
            </defs>
        </svg>
        Profile
    </a>
    <a class="menu {{(request()->is('pre-qualification*')) ? 'active' : ''}}" href="{{route('prequalification.index')}}">
        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
            <g clip-path="url(#clip0_115_138)">
                <path
                    d="M4.45606 1.11915C4.74609 1.37989 4.76953 1.82228 4.50879 2.11231L2.39941 4.45607C2.27051 4.59962 2.08887 4.68458 1.89551 4.68751C1.70215 4.69044 1.51758 4.6172 1.37988 4.48243L0.205078 3.31056C-0.0673828 3.03517 -0.0673828 2.58985 0.205078 2.31446C0.477539 2.03907 0.925781 2.03907 1.19824 2.31446L1.8457 2.96192L3.45996 1.16896C3.7207 0.878917 4.16309 0.855479 4.45312 1.11622L4.45606 1.11915ZM4.45606 5.80665C4.74609 6.06739 4.76953 6.50978 4.50879 6.79982L2.39941 9.14357C2.27051 9.28712 2.08887 9.37208 1.89551 9.37501C1.70215 9.37794 1.51758 9.3047 1.37988 9.16993L0.205078 7.99806C-0.0703125 7.72267 -0.0703125 7.27735 0.205078 7.00489C0.480469 6.73243 0.925781 6.7295 1.19824 7.00489L1.8457 7.65235L3.45996 5.85939C3.7207 5.56935 4.16309 5.54591 4.45312 5.80665H4.45606ZM6.5625 2.81251C6.5625 2.29396 6.98144 1.87501 7.5 1.87501H14.0625C14.5811 1.87501 15 2.29396 15 2.81251C15 3.33107 14.5811 3.75001 14.0625 3.75001H7.5C6.98144 3.75001 6.5625 3.33107 6.5625 2.81251ZM6.5625 7.50001C6.5625 6.98146 6.98144 6.56251 7.5 6.56251H14.0625C14.5811 6.56251 15 6.98146 15 7.50001C15 8.01856 14.5811 8.43751 14.0625 8.43751H7.5C6.98144 8.43751 6.5625 8.01856 6.5625 7.50001ZM4.6875 12.1875C4.6875 11.669 5.10645 11.25 5.625 11.25H14.0625C14.5811 11.25 15 11.669 15 12.1875C15 12.7061 14.5811 13.125 14.0625 13.125H5.625C5.10645 13.125 4.6875 12.7061 4.6875 12.1875ZM1.40625 10.7813C1.77921 10.7813 2.1369 10.9294 2.40062 11.1931C2.66434 11.4569 2.8125 11.8145 2.8125 12.1875C2.8125 12.5605 2.66434 12.9182 2.40062 13.1819C2.1369 13.4456 1.77921 13.5938 1.40625 13.5938C1.03329 13.5938 0.675604 13.4456 0.411881 13.1819C0.148158 12.9182 -8.3819e-09 12.5605 -8.3819e-09 12.1875C-8.3819e-09 11.8145 0.148158 11.4569 0.411881 11.1931C0.675604 10.9294 1.03329 10.7813 1.40625 10.7813Z"
                    fill="white" />
            </g>
            <defs>
                <clipPath id="clip0_115_138">
                    <rect width="15" height="15" fill="white" />
                </clipPath>
            </defs>
        </svg>
        Pre-Qualification
    </a>
    <a class="menu {{(request()->is('qhse*')) ? 'active' : ''}}" href="{{route('qhse.index')}}">
        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
            <path
                d="M7.5 1.25L2.5 3.125V6.93125C2.5 10.0875 4.63125 13.0312 7.5 13.75C10.3688 13.0312 12.5 10.0875 12.5 6.93125V3.125L7.5 1.25ZM7.5 10.625C5.775 10.625 4.375 9.225 4.375 7.5C4.375 5.775 5.775 4.375 7.5 4.375C9.225 4.375 10.625 5.775 10.625 7.5C10.625 9.225 9.225 10.625 7.5 10.625ZM8.53125 8.96875L7.1875 7.625V5.625H7.8125V7.36875L8.96875 8.525L8.53125 8.96875Z"
                fill="white" />
        </svg>
        QHSE
    </a>
</aside>