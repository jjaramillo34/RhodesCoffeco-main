<x-mail::message>
# Hi 

Someone request an even quote at <a href="http://rhodescoffeeco.com">Rhodescoffeeco.com</a>. The Details are given below:

### Name / Company: {{ $contact->name }}
### Email Address :     {{$contact->email}}
### Phone No:      {{$contact->phone}}
### Type of Event:      {{$contact->type_of_event}}
### Date of Event:      {{$contact->event_date}}
### Event Location:      {{$contact->event_address}}
### No of guest expected:      {{$contact->no_of_guest}}
### How did you hear about us:      {{$contact->hear_us}}
### About Event:      {{$contact->message}}

</x-mail::message>
