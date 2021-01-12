using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace RidiciStruktury
{
    class Program
    {
        static void Main(string[] args)
        {
            int hodnota = 100;
            int puvodnihodnota = hodnota;
            int podminka = 3;
            int podminka1 = 20;
            int podminka2 = 40;
            int odecet1 = 7;
            int odecet2 = 5;
            int value = 0;
            for (int i = 0; i < podminka; i++)
            {
                hodnota = puvodnihodnota;
                while (hodnota > podminka1)
                {
                    //Console.WriteLine("*");
                    value++;
                    if (hodnota >= podminka2)
                    {
                        hodnota = hodnota - odecet1;
                    }
                    else
                    {
                        hodnota = hodnota - odecet2;
                    }
                }
            }

            Console.WriteLine("Prvni:" + value);

            hodnota = 100;
            podminka = 5;
            podminka1 = 0;
            podminka2 = 3;
            odecet1 = 10;
            odecet2 = 8;
            value = 0;

            while (hodnota > podminka) //
            {
                if (hodnota > podminka1) //
                {
                    for (int i = 0; i < podminka2; i++)
                    {
                        // Console.WriteLine("*");
                        value++;
                    }

                    hodnota = hodnota - odecet1;
                }
                else
                {
                    //Console.WriteLine("*");
                    hodnota = hodnota - odecet2;
                    value++;
                }
            }
            Console.WriteLine("Druha: " + value);

            podminka = 6;
            podminka1 = 4;
            podminka2 = 2;
            value = 0;
            for (int i = 0; i < podminka; i++)
            {
                if (i >= podminka1)
                {
                    for (int j = 0; j < podminka2; j++)
                    {
                        // Console.WriteLine("*");
                        value++;
                    }
                }
                //Console.WriteLine("*");
                value++;
            }
            Console.WriteLine("Treti: " + value);
            Console.ReadLine();
        }
    }
}
