from django.urls import path
from hello_world import views

urlpatterns = [
    path('', views.hello_index, name='hello_index'),
    path('convert/', views.convert, name='convert'),
]