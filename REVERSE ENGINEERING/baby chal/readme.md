```
(gdb) disas main
```
Dump of assembler code for function main:
   - 0x0000000000001298 <+0>:     push   %rbp
   - 0x0000000000001299 <+1>:     mov    %rsp,%rbp
   - 0x000000000000129c <+4>:     sub    $0x10,%rsp
   - 0x00000000000012a0 <+8>:     movl   $0x0,-0x4(%rbp)
   - 0x00000000000012a7 <+15>:    cmpl   $0x1,-0x4(%rbp)
   - 0x00000000000012ab <+19>:    jne    0x12c1 <main+41>
   - 0x00000000000012ad <+21>:    mov    $0x9,%esi
   - 0x00000000000012b2 <+26>:    lea    0x2d87(%rip),%rax        # 0x4040 <flag>
   - 0x00000000000012b9 <+33>:    mov    %rax,%rdi
   - 0x00000000000012bc <+36>:    call   0x1159 <nakBendera>
   - 0x00000000000012c1 <+41>:    mov    $0x0,%eax
   - 0x00000000000012c6 <+46>:    leave
   - 0x00000000000012c7 <+47>:    ret
End of assembler dump.
```
(gdb) break *main+15
```
Breakpoint 1 at 0x12a7
```
(gdb) r
```
Starting program: /home/kali/Documents/CTF/babyrev_2.0 
[Thread debugging using libthread_db enabled]
Using host libthread_db library "/lib/x86_64-linux-gnu/libthread_db.so.1".


Now we need to edit the memory of the integer:

```
pwndbg> x $rbp-4
0x7fffffffe27c:	0x555552d000000000
pwndbg> set {int}0x7fffffffe27c = 1
pwndbg> x $rbp-4
0x7fffffffe27c:	0x555552d000000001
```

```
Breakpoint 1, 0x00005555555552a7 in main ()
(gdb) x $rbp-4
0x7fffffffde5c: 0x00000000
(gdb) set {int}0x7fffffffde5c = 1
(gdb) x $rbp-4
0x7fffffffde5c: 0x00000001
(gdb) c
Continuing.
47urkr347if{h3h3_y0u_b4by_r3v3rs3r}
[Inferior 1 (process 4110) exited normally]
(gdb) 
```
