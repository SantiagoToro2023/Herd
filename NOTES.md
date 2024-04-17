**Views**
- Die Seiten welche dem User angezeigt werden. Beinhalten den Markdown (HTMl, PHP) für das Design der Website.

**Routes**
- Je nach URL soll eine andere Seite angezeigt werden. Routes sagen welcher URL zu welcher Seite (View) leiten soll. Zb. test.com/contact sollte die contact.php view anzeigen.

**Layout / Master Files**
- Werden von Laravel als Component angesehen. Diese werden unter views/Components abgelegt. Man kann sie dann in den views referenzieren und brauchen indem man diesen Tag hinzufügt:
  <x-$NAME$> bei layout.blade.php wäre es also <x-$NAME>
  Alles was in deiner view zwischen den Code des Layouts soll muss mit der $slot Variable deklariert werden *<?php echo $slot ?>*. 
  Hier kann man auch die Blade Helper Variante *{{ $slot }}*

**$attributes**
- Mithilfe dieser Variable kann man attribute im <x-> Tag an layout Files weitergeben. Zb. <x-nav-link href="/contact">Contact<x-nav-link> im einen file,
  im anderen <a {{ $attributes }}>{{ $slot }}</a>. Somit wird der link mitgegeben.

**Named Slots**
Mithilfe von variablen kann man anstatt $slot named slots verwenden. Dies tut man zb.  mit *{{ $heading }}* und <x-slot:heading>Home Page<x-slot:heading>