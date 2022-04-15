import decorators

@decorators.do_twice
def say_whee():
    print('whee!!')
    
say_whee()