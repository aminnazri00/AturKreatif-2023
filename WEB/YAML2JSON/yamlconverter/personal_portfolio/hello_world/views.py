from django.shortcuts import render, redirect
from ruamel import yaml
import json
import warnings

def hello_index(request):
    return render(request, 'hello_world.html', {})

def convert(request):
    warnings.simplefilter('ignore', yaml.error.UnsafeLoaderWarning)
    
    if request.method == "POST" and "jsonText" in request.POST:
        query = request.POST.get('jsonText')

        if query is not None and query != '':
            yamlobject = yaml.load(query)
            jsonobject = json.dumps(yamlobject, sort_keys=True, indent=4)
        
            return render(request, 'convert.html', {'jsonobject': jsonobject})
        else:
            return redirect(hello_index)
    else:
        return redirect(hello_index)

# def hello_world(request):
#     return render(request, 'hello_world.html', {});