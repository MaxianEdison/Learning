from tkinter import *



root = Tk()
root.title('simple app')
root.geometry('500x400')

txt = Label(root, text = 'this is example text')
txt.grid()

txtt = Entry(root, width = 10)
txtt.grid(column = 1, row = 0)

def clicked():
    res = 'You are ' + txtt.get()
    txt.configure(text = res)
    
btn = Button(root, text = 'Click me!', fg = 'red', command = clicked)
btn.grid(column = 2, row = 0)

root.mainloop()