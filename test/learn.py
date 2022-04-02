from tkinter import * 

root = Tk()

root.title('title page')
root.geometry('500x400')

menu = Menu(root)
item = Menu(menu)
item.add_command(label = 'New')
menu.add_cascade(label = 'File', menu = item)
root.config(menu = menu)

lbl = Label(root, text = 'this is some text')
lbl.grid(column = 0, row = 0)

txt = Entry(root, width = 20)
txt.grid(column = 1, row = 0)

def clicked():
    res = 'welcome ' + txt.get()
    lbl.configure(text = '%s' % res)

btn = Button(root, text = 'click me', fg = 'blue', command = clicked)
btn.grid(column = 2, row = 0)

root.mainloop()