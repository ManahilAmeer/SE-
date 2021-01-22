@extends('layout')

@section('sidebarMenu')
<div style="width: 100%" class="flex-container">
    <div class="sidebar">
        <div class="container-fluid" style="display:block; box-sizing: border-box; width: 100%; height: 30%; border-bottom: 2px solid #e75480; background-color: pink; padding-top:70px; padding-bottom:70px;">
            <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxATBhATEBAOEBAQEA8NEg8ODg8QEBAQFREWFxYRFR8YHSggGBolGxUVITEjJSkrLi4uFx8zODMtNygtOisBCgoKBQUFDgUFDisZExkrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrK//AABEIAOEA4QMBIgACEQEDEQH/xAAaAAEBAQEBAQEAAAAAAAAAAAAABQQDAgEH/8QANxABAAEBBQQHBgUFAQAAAAAAAAECAwQRIXEFMUFREiNhgZGhwSIkMjSx0RNSYnKyM0KCkvAU/8QAFAEBAAAAAAAAAAAAAAAAAAAAAP/EABQRAQAAAAAAAAAAAAAAAAAAAAD/2gAMAwEAAhEDEQA/AP3EAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAHO1t6aYznu4g6DBXtD8tPi5Tfq/0x3AqCX/7q+zwe6NoTxpidMgURwsr3RVxwnlLuAAAAAAAAAAAAAAAAAAAAADPfLfo2WW+co+4Od7veGVO/jPJOmcZzzntAAAAABqu18mnKrOnzhlAXKZxjGNz6m3C8YVdGd07uyVIAAAAAAAAAAAAAAAAAABIvlp0reeUZQqW9eFlM8olFAAAAAB7srKqqcox+gPERm029zmmyiYzy9qOTXdbpFOc51eUaNM7gQle6WvSsYnjunVMvFn0baY8NGjZtfWTHOMe+AUQAAAAAAAAAAAAAAAAAZtoVe7azEevolqO0/6Mfu9JToiZ3RM6APVNnVO6mfCVW6UYXenTHxdgSKbpXP8Ab44Q7UbPq4zEaZqIDNZ3KiN+NWrREYRlk+gAAJu0466J5x6uF2qwt6Z7YjxyaNpY/iRyiN+sscbwXQAAAAAAAAAAAAAAAAAZtoR7tpMS+bPs8LDHjVn3Ol7jG71aPlyqxu1PZkDuAAAAAAAD5VTE0zE7pyRuh1/R/V0fPBaS6Ix2h/lM+AKgAAAAAAAAAAAAAAAAAPNrHVzpP0TLnb9GvDhP15qqFEgujzRVjRE84iXoAAAAAAGW+3jo04RvnjyZtnR1+kSbRq6/SIh02XGdU6R9QbwAAAAAAAAAAAAAAAAAEGNy3bVYWVU8olEBU2faY2GH5cu5qSbla9G3jlOX2VgAAAAHyqrCmZndGb6xbStcKIp55zoDDaV41zM8ZxbtmfBVrH0T27ZdXxRpIN4AAAAAAAAAAAAAAAAAMl/prmjCmMY3zhvTZiYnOJjVdfJiAQ6YmZyiZ0WbDH8KOlvwze4pjhEPoAAAACTfaavx5mYyndPDBWAQmi6UVxaRMROHHHKJhTiiOUeD0AAAAAAAAAAAAAAAAADxVa0xGcxHeD2Mdrf4j4Yx7Zyhktb1XVxwjlGQKddtTE51RDohNF2vc05TnTy5aAqjzZ1xNOMTjD0AAA8WlrTTHtTg43m9RTlGdXLlqm2lczVjM4yC1TVExlMTo+odFcxOUzGktVlf6o+KIq8pBSHCyvdE8cJ5Tk7RMc4B9AAAAAAAAAAAAcL1eYojnVO6PWXS1rimzmZ4QjWlczXMzvkHq0tqqpzmdODm+gAAAAPdjbTTVjHfHCVS73iKqct/GEh2uVeF4jt9nxBXYL1feFH+32ab5Xhd57cvFIAAAAAIkAarvfaon2s484UqaomnGM4lDbNnW2FXRndO7UFEAAAAAAAAAGHadplFPPOfRgd77VjeZ7MnAAAAAAAAicwBsv8Aa42dHbHS/wC82MmfLIAAAAAAAKZwqxjfGYAt0VY0RPOMXpm2fXjd9JmPX1aQAAAAAAAebSernSQRa5xrmeczPm+AAAAAAAAAAAAAAAAAAADdsyr4o0lvTNmz18/t9VMAAAAAAByvM+71ftl1cb38tVoCQAAAAAAAAAAAAAAAAAAADRs+feY0n6KqTcfmqe/+MqwAAAAAADjfPlqtPUASAAAAAAAAAAAAAAAAAAAAd7j81T3/AMZVgAAAAB//2Q==" alt="Beautician Picture" class="center">
            <h3 align="center" style="color: #e75480; font-weight: 700; padding-top: 20px">Beautician Name</h3>
        </div>
        <a href="#" class="w3-button w3-hover-pink w3-active-pink">Profile<span class="sr-only">(current)</span></a>
        <a href="beautServices" class="w3-button w3-hover-pink">Manage Services</a>
        <a href="appointments" class="w3-button w3-hover-pink">Appointments</a>
        <a href="approvedAppointments" class="w3-button w3-hover-pink">Approved Appointments</a>
    </div>
    <div style="flex-grow: 8; border: 2px solid #e75480;">
        @yield('beaut_profile')
        @yield('appointment')
        @yield('approved_appointment')
        @yield('beaut_services')
    </div>
</div>
@endsection
